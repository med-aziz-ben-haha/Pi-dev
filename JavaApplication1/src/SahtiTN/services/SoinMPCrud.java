/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.CaptchaSoin;
import SahtiTN.entities.NoteSoin;
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
            pst.setString(1, ch);
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
    
    public String cherchercattitre(int id) {

        String titre = "";
        String requete = "SELECT libelle_categorie_soin_mp FROM categorie_soin_mp where id= ?";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setInt(1,id);
            ResultSet rs = pst.executeQuery();
            
            while (rs.next()) {

                titre=rs.getString("libelle_categorie_soin_mp");
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return titre;
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

    public void supprimerSoinMP(int id) {

        String requete2 = "DELETE FROM soin_mp WHERE id= ?";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);
            pst.setInt(1, id);
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

    public CaptchaSoin getCaptchaSoin(int id) {

        String requete = "SELECT * FROM captcha where id= ?";
        CaptchaSoin c = new CaptchaSoin();
        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setInt(1, id);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {

                c.setId(rs.getInt("id"));
                c.setValue(rs.getString("value"));
                c.setLien_image_captcha(rs.getString("lien_image_captcha"));

                return c;
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return c;
    }

    public List<SoinMP> rechercherSoinMP(String caractere) {

        ArrayList<SoinMP> SoinMPs = new ArrayList<>();
        String requete = "select * from soin_mp where titre_soin_mp LIKE '%" + caractere + "%' OR description_soin_mp LIKE '%" + caractere + "%' OR adresse_soin_mp LIKE '%" + caractere + "%'";

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

    public void setSoinMPNoteAvis(int val, String Avis, int userid, int soinid) {
        if (val != 0) {

            String requete = " INSERT INTO note_soin_mp ( `user_id`, `valeur`, `soin_mp_id`)  VALUES(?,?,?)";
            try {

                PreparedStatement pst = cn2.prepareStatement(requete);
                pst.setInt(1, userid);
                pst.setInt(2, val);
                pst.setInt(3, soinid);

                pst.executeUpdate();

                System.out.println("note insérée");
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
        }
        if (Avis != "") {

            String requete = " INSERT INTO note_soin_mp ( `user_id`, `avis`, `soin_mp_id`)  VALUES(?,?,?)";
            try {

                PreparedStatement pst = cn2.prepareStatement(requete);
                pst.setInt(1, userid);
                pst.setString(2, Avis);
                pst.setInt(3, soinid);

                pst.executeUpdate();

                System.out.println("avis inséré");
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
        }

    }

    public NoteSoin getSoinMPNoteAvis(int userid, int soinid) {
        NoteSoin m = new NoteSoin();
        m=null;
        
        String requete = "Select * from note_soin_mp where user_id= ? AND soin_mp_id= ?";
        try {

            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setInt(1, userid);
            pst.setInt(2, soinid);

            pst.executeQuery();

            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                NoteSoin n = new NoteSoin();
        
                n.setId(rs.getInt("id"));
                n.setSoin_mp_id(rs.getInt("soin_mp_id"));
                n.setUser_id(rs.getInt("user_id"));
                n.setAvis(rs.getString("Avis"));
                n.setValeur(rs.getInt("Valeur"));
             return n;

            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return m;
    }
    
    public void updateSoinMPNoteAvis(int val, String Avis, int noteid) {
        if (val != 0) {
 
            String requete = "UPDATE note_soin_mp SET valeur = ?  WHERE id = ?";
            try {

                PreparedStatement pst = cn2.prepareStatement(requete);
                pst.setInt(1, val);
                pst.setInt(2, noteid);
                

                pst.executeUpdate();

                System.out.println("note modifiée");
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
        }
        if (Avis != "") {

            String requete = "UPDATE note_soin_mp SET avis = ?  WHERE id = ?";
            try {

                PreparedStatement pst = cn2.prepareStatement(requete);
                pst.setInt(2, noteid);
                pst.setString(1, Avis);
             
                pst.executeUpdate();

                System.out.println("avis modifié");
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
        }

    }
    
    public float MoyenneNotes(int soinId){
        int s=0;
        float m=0;
        int i=0;

        String requete= "Select valeur from note_soin_mp where soin_mp_id= ?";
        try {
            PreparedStatement pst= cn2.prepareStatement(requete);
            pst.setInt(1, soinId);
            pst.executeQuery();
            
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                s=s+rs.getInt("Valeur");
                i=i+1;       
            }
            if (s!=0)
            {m=s/i;  }
          return m;
        } catch (SQLException ex) {
            Logger.getLogger(SoinMPCrud.class.getName()).log(Level.SEVERE, null, ex);
        }
        return m;
    }
    
    public int CountSoins(int id) {

        int i = 0;
        String requete = "SELECT * FROM soin_mp where categorie_soin_mp_id= ?  ";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setInt(1,id);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
             i=i+1;
            }
          
         return i; 
         

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return i;
    }
}
