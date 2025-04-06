package com.inet.app;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.google.android.material.textfield.TextInputLayout;

import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity {

    EditText edtEmail, edtpassword;
    Button btnLogin;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        TextInputLayout textInputLayoutEmail = findViewById(R.id.EditTextEmail);
        TextInputLayout textInputLayoutContraseña = findViewById(R.id.EditTextContraseña);

        edtEmail = textInputLayoutEmail.getEditText();
        edtpassword = textInputLayoutContraseña.getEditText();

        btnLogin = findViewById(R.id.btn_login);

        verificarSesionGuardada();

        btnLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                validarUsuario("http://192.168.0.35/sitioweb_codigo_azul/app/validar_usuario.php");
            }
        });
    }

    private void verificarSesionGuardada() {
        SharedPreferences preferences = getSharedPreferences("SesionPrefs", MODE_PRIVATE);

        String email = preferences.getString("email", null);
        String password = preferences.getString("password", null);

        if (email != null && password != null) {
            // Si hay información de inicio de sesión almacenada, iniciar la actividad principal
            Intent intent = new Intent(getApplicationContext(), Llamadas.class);
            startActivity(intent);
        }
    }


    private void validarUsuario(String URL){
        StringRequest stringRequest = new StringRequest(Request.Method.POST, URL, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                if(!response.isEmpty()){
                    guardarSesion(edtEmail.getText().toString(), edtpassword.getText().toString());
                    Intent intent = new Intent(getApplicationContext(),Llamadas.class);
                    startActivity(intent);

                }else {
                    Toast.makeText(MainActivity.this, "Usuario o contraseña incorrecto", Toast.LENGTH_SHORT).show();
                }

            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e("MainActivity", "Error en la solicitud: " + error.toString());

                Toast.makeText(MainActivity.this, error.toString(), Toast.LENGTH_SHORT).show();
            }
        }){
            @Nullable
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String, String> parametros = new HashMap<String,String>();
                parametros.put("email", edtEmail.getText().toString());
                parametros.put("password", edtpassword.getText().toString());
                return parametros;
            }
        };

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);
    }

    private void guardarSesion(String email, String password){
        SharedPreferences preferences = getSharedPreferences("SesionPrefs", MODE_PRIVATE);
        SharedPreferences.Editor editor = preferences.edit();

        editor.putString("email", email);
        editor.putString("password", password);

        editor.apply();
    }


}