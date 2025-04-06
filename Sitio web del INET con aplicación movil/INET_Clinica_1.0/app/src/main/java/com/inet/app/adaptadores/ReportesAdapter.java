package com.inet.app.adaptadores;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.inet.app.R;
import com.inet.app.entidades.entidades_reportes;

import java.util.ArrayList;

public class ReportesAdapter extends RecyclerView.Adapter<RecyclerView.ViewHolder> {
    private static final int VIEW_TYPE_HEADER = 0;
    private static final int VIEW_TYPE_ITEM = 1;

    private ArrayList<entidades_reportes> reportesList;

    public ReportesAdapter(ArrayList<entidades_reportes> reportesList) {
        this.reportesList = reportesList;
    }

    @NonNull
    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        if (viewType == VIEW_TYPE_HEADER) {
            View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.titulo_recycler, parent, false);
            return new HeaderViewHolder(view);
        } else {
            View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.item_lista, parent, false);
            return new ViewHolder(view);
        }
    }

    @Override
    public void onBindViewHolder(@NonNull RecyclerView.ViewHolder holder, int position) {
        if (holder instanceof ViewHolder) {
            entidades_reportes reporte = reportesList.get(position - 1); // Resta 1 para excluir la fila de encabezado

            // Configurar la vista de fila con los datos del reporte
            ViewHolder itemHolder = (ViewHolder) holder;
            itemHolder.textIdReporte.setText(String.valueOf(reporte.getId_llamada()));
            itemHolder.textIdInternado.setText(String.valueOf(reporte.getId_internado()));
            itemHolder.textOrigen.setText(reporte.getOrigen());
            itemHolder.textFecha.setText(reporte.getFecha());
        }
    }

    @Override
    public int getItemCount() {
        // Añade 1 para la fila de encabezado
        return reportesList.size() + 1;
    }

    @Override
    public int getItemViewType(int position) {
        return (position == 0) ? VIEW_TYPE_HEADER : VIEW_TYPE_ITEM;
    }

    public void actualizarDatos(ArrayList<entidades_reportes> nuevosDatos) {
        this.reportesList = nuevosDatos;
        notifyDataSetChanged();
    }

    public class ViewHolder extends RecyclerView.ViewHolder {
        public TextView textIdReporte;
        public TextView textIdInternado;
        public TextView textOrigen;
        public TextView textFecha;

        public ViewHolder(@NonNull View itemView) {
            super(itemView);

            textIdReporte = itemView.findViewById(R.id.Text_Id_Reporte);
            textIdInternado = itemView.findViewById(R.id.Text_Id_Internado);
            textOrigen = itemView.findViewById(R.id.Text_Origen);
            textFecha = itemView.findViewById(R.id.Text_fecha);
        }
    }

    public class HeaderViewHolder extends RecyclerView.ViewHolder {
        public HeaderViewHolder(@NonNull View itemView) {
            super(itemView);
        }
    }
}