/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;



import javafx.scene.image.ImageView;

/**
 *
 * @author House
 */
public class Medicament {
    private int id;
    private String nom_medicament;
  //  private LocalDate date_modif;
    private int dispo;
    private String img_medicament;
    private String descmedicament;
    private ImageView showimage;

    public ImageView getShowimage() {
        return showimage;
    }

    public void setShowimage(ImageView showimage) {
        this.showimage = showimage;
    }

 /*   public Medicament(int id, String nom_medicament, LocalDate date_modif, int dispo, String descmedicament, ImageView showimage) {
        this.id = id;
        this.nom_medicament = nom_medicament;
        this.date_modif = date_modif;
        this.dispo = dispo;
        this.descmedicament = descmedicament;
        this.showimage = showimage;
    }*/

    public Medicament() {
    }

  /*  public Medicament(String nom_medicament,LocalDate date_modif, int dispo, String img_medicament, String descmedicament) {
        this.nom_medicament = nom_medicament;
        this.date_modif = date_modif;
        this.dispo = dispo;
        this.img_medicament = img_medicament;
        this.descmedicament = descmedicament;
    }
  */

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom_medicament() {
        return nom_medicament;
    }

    public void setNom_medicament(String nom_medicament) {
        this.nom_medicament = nom_medicament;
    }

   /* public LocalDate getDate_modif() {
        return date_modif;
    }

    public void setDate_modif(LocalDate date_modif) {
        this.date_modif = date_modif;
    }*/

    public int getDispo() {
        return dispo;
    }

    public void setDispo(int dispo) {
        this.dispo = dispo;
    }

    public String getImg_medicament() {
        return img_medicament;
    }

    public void setImg_medicament(String img_medicament) {
        this.img_medicament = img_medicament;
    }

    public String getDescmedicament() {
        return descmedicament;
    }

    public void setDescmedicament(String descmedicament) {
        this.descmedicament = descmedicament;
    }

   /* @Override
    public String toString() {
        return "Medicament{" + "id=" + id + ", nom_medicament=" + nom_medicament + ", date_modif=" + date_modif + ", dispo=" + dispo + ", img_medicament=" + img_medicament + ", descmedicament=" + descmedicament + '}';
    }*/

   
    
}
