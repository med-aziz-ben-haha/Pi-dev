/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

import java.util.Objects;

/**
 *
 * @author LENOVO
 */
public class SoinMP {
    private Integer id;
    private int categorie_soin_mp_id;
    private String titre_soin_mp;
    private String description_soin_mp;
    private String lien_image_smp;
    private String adresse_soin_mp;
    private float moyennenote;
    private float valeur;
    private String avis;

    public float getMoyennenote() {
        return moyennenote;
    }

    public SoinMP(Integer id, int categorie_soin_mp_id, String titre_soin_mp, String description_soin_mp, String lien_image_smp, String adresse_soin_mp, float moyennenote, float valeur, String avis) {
        this.id = id;
        this.categorie_soin_mp_id = categorie_soin_mp_id;
        this.titre_soin_mp = titre_soin_mp;
        this.description_soin_mp = description_soin_mp;
        this.lien_image_smp = lien_image_smp;
        this.adresse_soin_mp = adresse_soin_mp;
        this.moyennenote = moyennenote;
        this.valeur = valeur;
        this.avis = avis;
    }

    public void setMoyennenote(float moyennenote) {
        this.moyennenote = moyennenote;
    }

    public float getValeur() {
        return valeur;
    }

    public void setValeur(float valeur) {
        this.valeur = valeur;
    }

    public float getMoyenne() {
        return moyennenote;
    }

    public void setMoyenne(float moyenne) {
        this.moyennenote = moyenne;
    }
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public int getCategorie_soin_mp_id() {
        return categorie_soin_mp_id;
    }

    public void setCategorie_soin_mp_id(int categorie_soin_mp_id) {
        this.categorie_soin_mp_id = categorie_soin_mp_id;
    }


    public String getTitre_soin_mp() {
        return titre_soin_mp;
    }

    public void setTitre_soin_mp(String titre_soin_mp) {
        this.titre_soin_mp = titre_soin_mp;
    }

    /*public SoinMP(Integer id, int categorie_soin_mp_id, String titre_soin_mp, String description_soin_mp, String lien_image_smp, String adresse_soin_mp) {
        this.id = id;
        this.categorie_soin_mp_id = categorie_soin_mp_id;
        this.titre_soin_mp = titre_soin_mp;
        this.description_soin_mp = description_soin_mp;
        this.lien_image_smp = lien_image_smp;
        this.adresse_soin_mp = adresse_soin_mp;
    }*/

    public String getDescription_soin_mp() {
        return description_soin_mp;
    }

    public void setDescription_soin_mp(String description_soin_mp) {
        this.description_soin_mp = description_soin_mp;
    }

    public String getLien_image_smp() {
        return lien_image_smp;
    }

    public void setLien_image_smp(String lien_image_smp) {
        this.lien_image_smp = lien_image_smp;
    }

    public String getAdresse_soin_mp() {
        return adresse_soin_mp;
    }

    public void setAdresse_soin_mp(String adresse_soin_mp) {
        this.adresse_soin_mp = adresse_soin_mp;
    }

    /*public SoinMP(Integer categorie_soin_mp_id, String titre_soin_mp, String description_soin_mp, String lien_image_smp, String adresse_soin_mp) {
        this.categorie_soin_mp_id = categorie_soin_mp_id;
        this.titre_soin_mp = titre_soin_mp;
        this.description_soin_mp = description_soin_mp;
        this.lien_image_smp = lien_image_smp;
        this.adresse_soin_mp = adresse_soin_mp;
    }*/

    public SoinMP() {
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 97 * hash + Objects.hashCode(this.id);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final SoinMP other = (SoinMP) obj;
        if (this.categorie_soin_mp_id != other.categorie_soin_mp_id) {
            return false;
        }
        if (Float.floatToIntBits(this.moyennenote) != Float.floatToIntBits(other.moyennenote)) {
            return false;
        }
        if (Float.floatToIntBits(this.valeur) != Float.floatToIntBits(other.valeur)) {
            return false;
        }
        if (!Objects.equals(this.titre_soin_mp, other.titre_soin_mp)) {
            return false;
        }
        if (!Objects.equals(this.description_soin_mp, other.description_soin_mp)) {
            return false;
        }
        if (!Objects.equals(this.lien_image_smp, other.lien_image_smp)) {
            return false;
        }
        if (!Objects.equals(this.adresse_soin_mp, other.adresse_soin_mp)) {
            return false;
        }
        if (!Objects.equals(this.avis, other.avis)) {
            return false;
        }
        if (!Objects.equals(this.id, other.id)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "SoinMP{" + "id=" + id + ", categorie_soin_mp_id=" + categorie_soin_mp_id + ", titre_soin_mp=" + titre_soin_mp + ", description_soin_mp=" + description_soin_mp + ", lien_image_smp=" + lien_image_smp + ", adresse_soin_mp=" + adresse_soin_mp + ", moyennenote=" + moyennenote + ", valeur=" + valeur + ", avis=" + avis + '}';
    }

    public String getAvis() {
        return avis;
    }

    public void setAvis(String avis) {
        this.avis = avis;
    }

    

    

        
    
}
