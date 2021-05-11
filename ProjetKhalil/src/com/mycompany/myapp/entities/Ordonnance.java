/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

import java.util.Date;


/**
 *
 * @author Ennaifer Khalil
 */
public class Ordonnance {
    private int id;
    private String contenu;
    private Date dateOrdonnance;
    private String liste_medicament;
    private int user_id;
    private int medecin_id;

    public Ordonnance() {
    }

    public Ordonnance(String contenu, Date dateOrdonnance, String liste_medicament, int user_id, int medecin_id) {
        this.contenu = contenu;
        this.dateOrdonnance = dateOrdonnance;
        this.liste_medicament = liste_medicament;
        this.user_id = user_id;
        this.medecin_id = medecin_id;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public Date getDateOrdonnance() {
        return dateOrdonnance;
    }

    public void setDateOrdonnance(Date dateOrdonnance) {
        this.dateOrdonnance = dateOrdonnance;
    }

    public String getListe_medicament() {
        return liste_medicament;
    }

    public void setListe_medicament(String liste_medicament) {
        this.liste_medicament = liste_medicament;
    }

    public int getUser_id() {
        return user_id;
    }

    public void setUser_id(int user_id) {
        this.user_id = user_id;
    }

    public int getMedecin_id() {
        return medecin_id;
    }

    public void setMedecin_id(int medecin_id) {
        this.medecin_id = medecin_id;
    }

    @Override
    public String toString() {
        return "Ordonnance{" + "id=" + id + ", contenu=" + contenu + ", dateOrdonnance=" + dateOrdonnance + ", liste_medicament=" + liste_medicament + ", user_id=" + user_id + ", medecin_id=" + medecin_id + '}';
    }

   
}
