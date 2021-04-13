/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.SoinMP;
import SahtiTN.tools.MyConnection;
import com.lowagie.text.BadElementException;
import com.lowagie.text.Image;
import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
/**
 *
 * @author LENOVO
 */
public class SoinMPCrud {
     Connection cn2;
    Statement st;

    public SoinMPCrud() {
        cn2 = MyConnection.getInstance().getCnx();
    }

 
    public void ajouterSoinMP(SoinMP s) {
        String requete = " INSERT INTO soin_mp ( `categorie_soin_mp_id`, `titre_soin_mp`, `description_soin_mp`, `lien_image_smp`, `adresse_soin_mp`)  VALUES(?,?,?,?,?)";
        try {

            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setInt(1, s.getCategorie_soin_mp_id());
            pst.setString(2, s.getTitre_soin_mp());
            pst.setString(3, s.getDescription_soin_mp());
            pst.setString(4, s.getLien_image_smp());
            pst.setString(5, s.getAdresse_soin_mp());
            pst.executeUpdate();

            System.out.println("SoinMP Ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public int chercherCatSoinMPid(String ch) {

        int id_cat = 0;
        String requete = "SELECT id FROM categorie_soin_mp where libelle_categorie_soin_mp= ?  ";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setString(1,ch);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {

               id_cat = rs.getInt("id");
            return id_cat;
            }
         

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return id_cat;
    }

    public List<String> cherchercattitres() {

        ArrayList<String> titres = new ArrayList<>();
        String requete = "SELECT libelle_categorie_soin_mp FROM categorie_soin_mp";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {

                titres.add(rs.getString("libelle_categorie_soin_mp"));
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return titres;
    }

    public void modifierSoinMP(SoinMP s) {

        String requete2 = "UPDATE soin_mp SET titre_soin_mp = ?, description_soin_mp= ?, lien_image_smp= ?, adresse_soin_mp= ? WHERE id = ?";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);  
            pst.setString(1, s.getTitre_soin_mp());
            pst.setString(2, s.getDescription_soin_mp());
            pst.setString(3, s.getLien_image_smp());
            pst.setString(4, s.getAdresse_soin_mp());
        
            pst.setInt(5, s.getId());

            pst.executeUpdate();
            System.out.println("SoinMP modifé");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public void supprimerSoinMP(SoinMP a) {

        String requete2 = "DELETE FROM soin_mp WHERE id= ?";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);
            pst.setInt(1, a.getId());
            pst.executeUpdate();
            System.out.println("SoinMP supprimé");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public List<SoinMP> afficherSoinMP() {

        ArrayList<SoinMP> SoinMPs = new ArrayList<>();
        String requete = "SELECT * FROM soin_mp";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                SoinMP s = new SoinMP();
                s.setId(rs.getInt("id"));
                s.setCategorie_soin_mp_id(rs.getInt("categorie_soin_mp_id"));
                s.setTitre_soin_mp(rs.getString("titre_soin_mp"));
                s.setDescription_soin_mp(rs.getString("description_soin_mp"));
                s.setLien_image_smp(rs.getString("lien_image_smp"));
                s.setAdresse_soin_mp(rs.getString("adresse_soin_mp"));

                SoinMPs.add(s);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return SoinMPs;
    }
    public List<SoinMP> afficherSoinMPFront(int id) {

        ArrayList<SoinMP> SoinMPs = new ArrayList<>();
        String requete = "SELECT * FROM soin_mp where categorie_soin_mp_id= ?";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
             pst.setInt(1, id);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                SoinMP s = new SoinMP();
                s.setId(rs.getInt("id"));
                s.setCategorie_soin_mp_id(rs.getInt("categorie_soin_mp_id"));
                s.setTitre_soin_mp(rs.getString("titre_soin_mp"));
                s.setDescription_soin_mp(rs.getString("description_soin_mp"));
                s.setLien_image_smp(rs.getString("lien_image_smp"));
                s.setAdresse_soin_mp(rs.getString("adresse_soin_mp"));

                SoinMPs.add(s);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return SoinMPs;
    }
    
      public SoinMP afficherAideDetailsFront(int id) {

        
        String requete = "SELECT * FROM soin_mp where id= ?";
            SoinMP s = new SoinMP();
        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
             pst.setInt(1, id);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
               
                s.setId(rs.getInt("id"));
                s.setCategorie_soin_mp_id(rs.getInt("categorie_soin_mp_id"));
                s.setTitre_soin_mp(rs.getString("titre_soin_mp"));
                s.setDescription_soin_mp(rs.getString("description_soin_mp"));
                s.setLien_image_smp(rs.getString("lien_image_smp"));
                s.setAdresse_soin_mp(rs.getString("adresse_soin_mp"));

                return s;
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return s;
    }
    

    public List<SoinMP> rechercherSoinMP(String besoin, String caractere) {

        ArrayList<SoinMP> SoinMPs = new ArrayList<>();
        String requete = "select * from soin_mp where " + besoin + " LIKE '" + caractere + "%'";

        try {
            PreparedStatement pst2 = cn2.prepareStatement(requete);

            pst2.executeQuery();
            System.out.println("Recherche avec succes");

            ResultSet rs = pst2.executeQuery();

            while (rs.next()) {
                SoinMP s = new SoinMP();
                s.setId(rs.getInt("id"));
                s.setCategorie_soin_mp_id(rs.getInt("categorie_soin_mp_id"));
                s.setTitre_soin_mp(rs.getString("titre_soin_mp"));
                s.setDescription_soin_mp(rs.getString("description_soin_mp"));
                s.setLien_image_smp(rs.getString("lien_image_smp"));
                s.setAdresse_soin_mp(rs.getString("adresse_soin_mp"));

                SoinMPs.add(s);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return SoinMPs;
    }

    public void trierSoinMP(String o) {

        try {

            String requete2 = "SELECT * FROM soin_mp order by " + o;
            PreparedStatement pst = cn2.prepareStatement(requete2);
            //   pst.setString(1, o);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                SoinMP s = new SoinMP();
                s.setId(rs.getInt("id"));
                s.setCategorie_soin_mp_id(rs.getInt("categorie_soin_mp_id"));
                s.setTitre_soin_mp(rs.getString("titre_soin_mp"));
                s.setDescription_soin_mp(rs.getString("description_soin_mp"));
                s.setLien_image_smp(rs.getString("lien_image_smp"));
                s.setAdresse_soin_mp(rs.getString("adresse_soin_mp"));

                switch (o) {
                    case "id":
                        System.out.println("categorie_soin_mp_id = " + s.getId());
                        break;
                    case "titre_soin_mp":
                        System.out.println("titre_soin_mp = " + s.getTitre_soin_mp());
                        break;
                    case "description_soin_mp":
                        System.out.println("description_soin_mp = " + s.getDescription_soin_mp());
                        break;
                    case "lien_image_smp":
                        System.out.println("lien_image_smp = " + s.getLien_image_smp());
                        break;
                    case "adresse_soin_mp":
                        System.out.println("adresse_soin_mp = " + s.getAdresse_soin_mp());
                        break;
                    default:
                        System.out.println("verifier le paramétre svp !!");

                }
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    

}
