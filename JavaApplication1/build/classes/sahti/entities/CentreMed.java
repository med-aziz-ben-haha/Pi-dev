/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sahti.entities;



/**
 *
 * @author allouch
 */
public class CentreMed {
  
    private int id_centre_medical ;
    private String nom_centre_medical;
    private String adresse ;
    private String Type ;
    private int Num_Tel ;
    private String mail ;
    
    
    
    
    public int get_id_centre_medical() {
        return id_centre_medical;
    }

    public void set_id_centre_medical(int id_centre_medical) {
        this.id_centre_medical = id_centre_medical;
    }

    public string get_nom_centre_medical() {
        return nom_centre_medical;
    }

    public void set_nom_centre_medical(String nom_centre_medical) {
        this.nom_centre_medical =nom_centre_medical;
    }

    public String get_adresse() {
        return adresse;
    }

    public void set_adresse( String adresse) {
        this.adresse =adresse;
    }
    
    public String get_Type() {
        return Type;
    }

    public void set_Type(String Type) {
        this.Type =Type;
    }

     public int get_Num_Tel() {
        return  Num_Tel;
    }

    public void set_Num_Tel(int Num_Tel) {
        this.Num_Tel = Num_Tell;
    }

    public String get_mail() {
        return mail;
    }

    public void set_mail(String mail) {
        this.mail =mail;
    }


    public CentreMed( int id_centre_medical,String nom_centre_medical, String adresse ,String Type,int Num_Tel ,String mail) {
        this.id_centre_medical = id_centre_medical;
        this.nom_centre_medical =nom_centre_medical;
        this.adresse =adresse;
        this.Type =Type;
        this.Num_Tel = Num_Tel;
        this.mail =mail;
    }
 

    @Override
    public String toString() {
        return "CentreMed{" + "id_centre_medical=" +id_centre_medical + ",nom_centre_medical=" + nom_centre_medical + ", adresse=" + adresse + ",Type =" + Type + ", Num_Tel=" + Num_Tel + ", mail=" + mail '}';
    }
    
}
