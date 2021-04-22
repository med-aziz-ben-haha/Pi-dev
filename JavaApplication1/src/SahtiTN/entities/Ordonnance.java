/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

import java.sql.Date;
import java.time.LocalDate;

/**
 *
 * @author House
 */
public class Ordonnance {
    private int id;
    private String contenu;
    private LocalDate dateOrdonnance;
    private String liste_medicament;

    public Ordonnance() {
    }

    public Ordonnance(String contenu, LocalDate dateOrdonnance, String liste_medicament) {
        this.contenu = contenu;
        this.dateOrdonnance = dateOrdonnance;
        this.liste_medicament = liste_medicament;
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

    public LocalDate getDateOrdonnance() {
        return dateOrdonnance;
    }

    public void setDateOrdonnance(LocalDate dateOrdonnance) {
        this.dateOrdonnance = dateOrdonnance;
    }

    public String getListe_medicament() {
        return liste_medicament;
    }

    public void setListe_medicament(String liste_medicament) {
        this.liste_medicament = liste_medicament;
    }

    @Override
    public String toString() {
        return "Ordonnance{" + "id=" + id + ", contenu=" + contenu + ", dateOrdonnance=" + dateOrdonnance + '}';
    }

}
