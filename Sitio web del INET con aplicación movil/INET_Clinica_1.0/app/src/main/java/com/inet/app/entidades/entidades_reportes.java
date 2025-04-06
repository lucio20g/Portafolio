package com.inet.app.entidades;

public class entidades_reportes {

    private int id_llamada;
    private int id_internado;
    private String origen;
    private String fecha;

    public int getId_llamada() {
        return id_llamada;
    }

    public void setId_llamada(int id_llamada) {
        this.id_llamada = id_llamada;
    }

    public int getId_internado() {
        return id_internado;
    }

    public void setId_internado(int id_internado) {
        this.id_internado = id_internado;
    }

    public String getOrigen() {
        return origen;
    }

    public void setOrigen(String origen) {
        this.origen = origen;
    }

    public String getFecha() {
        return fecha;
    }

    public void setFecha(String fecha) {
        this.fecha = fecha;
    }
}