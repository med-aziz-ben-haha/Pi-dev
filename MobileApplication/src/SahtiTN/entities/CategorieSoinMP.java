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
public class CategorieSoinMP {
    private Integer id;
    private String libelle_categorie_soin_mp;
    private String lien_icone_csmp;

   public CategorieSoinMP(String libelle_categorie_soin_mp) {
        this.libelle_categorie_soin_mp = libelle_categorie_soin_mp;
      
    }

    public Integer getId() {
        return id;
    }

    public CategorieSoinMP(Integer id, String libelle_categorie_soin_mp, String lien_icone_csmp) {
        this.id = id;
        this.libelle_categorie_soin_mp = libelle_categorie_soin_mp;
        this.lien_icone_csmp = lien_icone_csmp;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getLibelle_categorie_soin_mp() {
        return libelle_categorie_soin_mp;
    }

    public void setLibelle_categorie_soin_mp(String libelle_categorie_soin_mp) {
        this.libelle_categorie_soin_mp = libelle_categorie_soin_mp;
    }

    public String getLien_icone_csmp() {
        return lien_icone_csmp;
    }

    public void setLien_icone_csmp(String lien_icone_csmp) {
        this.lien_icone_csmp = lien_icone_csmp;
    }

    public CategorieSoinMP() {
    }

    public CategorieSoinMP(String libelle_categorie_soin_mp, String lien_icone_csmp) {
        this.libelle_categorie_soin_mp = libelle_categorie_soin_mp;
        this.lien_icone_csmp = lien_icone_csmp;
    }

    @Override
    public String toString() {
        return libelle_categorie_soin_mp ;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 79 * hash + Objects.hashCode(this.id);
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
        final CategorieSoinMP other = (CategorieSoinMP) obj;
        if (!Objects.equals(this.libelle_categorie_soin_mp, other.libelle_categorie_soin_mp)) {
            return false;
        }
        if (!Objects.equals(this.lien_icone_csmp, other.lien_icone_csmp)) {
            return false;
        }
        if (!Objects.equals(this.id, other.id)) {
            return false;
        }
        return true;
    }
    
    
}
