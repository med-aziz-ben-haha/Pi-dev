/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

/**
 *
 * @author oussama
 */
public class specialitelabo {

    private int idSpecialiteLabo ;
    private String nomSpecialiteLabo;
    private String libelleSpecialiteLabo;

    public specialitelabo() {
    }
    
    public specialitelabo(int idSpecialiteLabo, String nomSpecialiteLabo, String libelleSpecialiteLabo) {
        this.idSpecialiteLabo = idSpecialiteLabo;
        this.nomSpecialiteLabo = nomSpecialiteLabo;
        this.libelleSpecialiteLabo = libelleSpecialiteLabo;
    }
    
    public specialitelabo(String nomSpecialiteLabo, String libelleSpecialiteLabo) {
        this.nomSpecialiteLabo = nomSpecialiteLabo;
        this.libelleSpecialiteLabo = libelleSpecialiteLabo;
    }

    public int getIdSpecialiteLabo() {
        return idSpecialiteLabo;
    }

    public void setIdSpecialiteLabo(int idSpecialiteLabo) {
        this.idSpecialiteLabo = idSpecialiteLabo;
    }

    public String getNomSpecialiteLabo() {
        return nomSpecialiteLabo;
    }

    public void setNomSpecialiteLabo(String nomSpecialiteLabo) {
        this.nomSpecialiteLabo = nomSpecialiteLabo;
    }

    public String getLibelleSpecialiteLabo() {
        return libelleSpecialiteLabo;
    }

    public void setLibelleSpecialiteLabo(String libelleSpecialiteLabo) {
        this.libelleSpecialiteLabo = libelleSpecialiteLabo;
    }
    
    
    @Override
    public String toString() {
        return "specialitelabo{" + "idSpecialiteLabo=" + idSpecialiteLabo + ", nomSpecialiteLabo=" + nomSpecialiteLabo + ", libelleSpecialiteLabo=" + libelleSpecialiteLabo + '}';
    }
    
    
}
