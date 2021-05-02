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
public class NoteSoin {
    public int id ; 
    public int user_id; 
    public int soin_mp_id; 
    public int valeur;
    public String avis;
    public float moyenne;
    public NoteSoin(int user_id, int soin_mp_id, int valeur, String avis) {
        this.user_id = user_id;
        this.soin_mp_id = soin_mp_id;
        this.valeur = valeur;
        this.avis = avis;
    }

    public float getMoyenne() {
        return moyenne;
    }

    public void setMoyenne(float moyenne) {
        this.moyenne = moyenne;
    }

    public NoteSoin() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public NoteSoin(int id, int user_id, int soin_mp_id, int valeur, String avis) {
        this.id = id;
        this.user_id = user_id;
        this.soin_mp_id = soin_mp_id;
        this.valeur = valeur;
        this.avis = avis;
    }

    public int getUser_id() {
        return user_id;
    }

    public void setUser_id(int user_id) {
        this.user_id = user_id;
    }

    public int getSoin_mp_id() {
        return soin_mp_id;
    }

    public void setSoin_mp_id(int soin_mp_id) {
        this.soin_mp_id = soin_mp_id;
    }

    public int getValeur() {
        return valeur;
    }

    public void setValeur(int valeur) {
        this.valeur = valeur;
    }

    public String getAvis() {
        return avis;
    }

    public void setAvis(String avis) {
        this.avis = avis;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 97 * hash + this.id;
        hash = 97 * hash + this.user_id;
        hash = 97 * hash + this.soin_mp_id;
        hash = 97 * hash + this.valeur;
        hash = 97 * hash + Objects.hashCode(this.avis);
        hash = 97 * hash + Float.floatToIntBits(this.moyenne);
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
        final NoteSoin other = (NoteSoin) obj;
        if (this.id != other.id) {
            return false;
        }
        if (this.user_id != other.user_id) {
            return false;
        }
        if (this.soin_mp_id != other.soin_mp_id) {
            return false;
        }
        if (this.valeur != other.valeur) {
            return false;
        }
        if (Float.floatToIntBits(this.moyenne) != Float.floatToIntBits(other.moyenne)) {
            return false;
        }
        if (!Objects.equals(this.avis, other.avis)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "NoteSoin{" + "id=" + id + ", user_id=" + user_id + ", soin_mp_id=" + soin_mp_id + ", valeur=" + valeur + ", avis=" + avis + ", moyenne=" + moyenne + '}';
    }

  

}
