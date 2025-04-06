package com.inet.app;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;
import android.widget.Toast;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.inet.app.entidades.entidades_reportes;
import com.inet.app.adaptadores.ReportesAdapter;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class Llamadas extends AppCompatActivity {
    private RecyclerView recyclerView;
    private ReportesAdapter reportesAdapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_llamadas);

        recyclerView = findViewById(R.id.ListaLlamadas);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        ImageButton btnCerrarSesion = findViewById(R.id.btn_cerrar_sesion);

        btnCerrarSesion.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                cerrarSesion();
            }
        });

        obtenerDatos();

        ImageButton btnActualizar = findViewById(R.id.btn_actualizar);

        btnActualizar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                obtenerDatos();
            }
        });

    }

    private void cerrarSesion() {
        SharedPreferences preferences = getSharedPreferences("SesionPrefs", MODE_PRIVATE);
        SharedPreferences.Editor editor = preferences.edit();

        editor.remove("email");
        editor.remove("password");
        editor.apply();

        Intent intent = new Intent(getApplicationContext(), MainActivity.class);
        startActivity(intent);
        finish();
    }

    private void obtenerDatos() {
        String url = "http://192.168.0.35/sitioweb_codigo_azul/app/obtener_reportes.php";

        StringRequest stringRequest = new StringRequest(Request.Method.GET, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        // Procesar la respuesta JSON y cargar los datos en el RecyclerView
                        cargarDatos(response);
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(Llamadas.this, "Error al obtener datos.", Toast.LENGTH_SHORT).show();
                    }
                });

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);
    }

    private void cargarDatos(String response) {
        try {
            JSONArray jsonArray = new JSONArray(response);
            ArrayList<entidades_reportes> reportesList = new ArrayList<>();

            for (int i = 0; i < jsonArray.length(); i++) {
                JSONObject jsonObject = jsonArray.getJSONObject(i);
                entidades_reportes reporte = new entidades_reportes();

                reporte.setId_llamada(jsonObject.getInt("ID_REPORTES"));
                reporte.setId_internado(jsonObject.getInt("ID_INTERNADO"));
                reporte.setOrigen(jsonObject.getString("ORIGEN"));
                reporte.setFecha(jsonObject.getString("HORA_FECHA"));

                reportesList.add(reporte);
            }

            // Crear y establecer el adaptador para el RecyclerView
            reportesAdapter = new ReportesAdapter(reportesList);
            recyclerView.setAdapter(reportesAdapter);
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }
}