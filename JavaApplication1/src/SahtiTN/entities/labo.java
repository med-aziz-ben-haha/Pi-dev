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
public class labo {
    
    private int idLabo ;
    private String nomLabo;
    private String adresseLabo;
    private int telLabo ;
    private String emailLabo ;
    
    private int idSpecialiteLabo;
    private String nomSpecialiteLabo;

    public labo() {
    }

    public int getIdLabo() {
        return idLabo;
    }

    public void setIdLabo(int idLabo) {
        this.idLabo = idLabo;
    }

    public String getNomLabo() {
        return nomLabo;
    }

    public void setNomLabo(String nomLabo) {
        this.nomLabo = nomLabo;
    }

    public String getAdresseLabo() {
        return adresseLabo;
    }

    public void setAdresseLabo(String adresseLabo) {
        this.adresseLabo = adresseLabo;
    }

    public int getTelLabo() {
        return telLabo;
    }

    public void setTelLabo(int telLabo) {
        this.telLabo = telLabo;
    }

    public String getEmailLabo() {
        return emailLabo;
    }

    public void setEmailLabo(String emailLabo) {
        this.emailLabo = emailLabo;
    }

    public int getIdSpecialiteLabo() {
        return idSpecialiteLabo;
    }

    public void setIdSpecialiteLabo(int idSpecialiteLabo) {
        this.idSpecialiteLabo = idSpecialiteLabo;
    }
    
        public void setNomSpecialiteLabo(String nomSpecialiteLabo) {
        this.nomSpecialiteLabo = nomSpecialiteLabo;
    }

    public String getNomSpecialiteLabo() {
        return nomSpecialiteLabo;
    }
    
 @Override
    public String toString() {
        return "labo{" + "idLabo=" + idLabo + ", nomLabo=" + nomLabo + ", adresseLabo=" + adresseLabo + ", telLabo=" + telLabo + ", emailLabo=" + emailLabo + ", idSpecialiteLabo=" + idSpecialiteLabo + '}';
    }
    
    
}





