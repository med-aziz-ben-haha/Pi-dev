/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.CategorieSoinMP;
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
public class CategorieSoinMPCrud {

    Connection cn2;
    Statement st;

    public CategorieSoinMPCrud() {
        cn2 = MyConnection.getInstance().getCnx();
    }

    public void AjouterCategorieSoinMP(CategorieSoinMP c) {
        String requete = " INSERT INTO categorie_soin_mp ( `libelle_categorie_soin_mp`, `lien_icone_csmp`)  VALUES(?,?)";
        try {

            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setString(1, c.getLibelle_categorie_soin_mp());
            pst.setString(2, c.getLien_icone_csmp());
            pst.executeUpdate();

            System.out.println("Categorie SoinMP ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public void modifierCategorieSoinMP(CategorieSoinMP c) {

        String requete2 = "UPDATE categorie_soin_mp SET libelle_categorie_soin_mp = ?, lien_icone_csmp = ? WHERE id = ?";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);

            pst.setString(1, c.getLibelle_categorie_soin_mp());
            pst.setString(2, c.getLien_icone_csmp());

            pst.setInt(3, c.getId());

            pst.executeUpdate();
            System.out.println("Categorie SoinMP modifée");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public void deleteCategorieSoinMP(int id) {

        String requete2 = "DELETE FROM categorie_soin_mp WHERE id= ?";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);
            pst.setInt(1, id);
            pst.executeUpdate();
            System.out.println("Categorie SoinMP supprimée");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public List<CategorieSoinMP> afficherCategorieSoinMP() {
        Image Image = null;
        ArrayList<CategorieSoinMP> CategorieSoinMPs = new ArrayList<>();
        String requete = "SELECT * FROM categorie_soin_mp";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                CategorieSoinMP c = new CategorieSoinMP();
                c.setId(rs.getInt("id"));
                c.setLibelle_categorie_soin_mp(rs.getString("libelle_categorie_soin_mp"));
                c.setLien_icone_csmp(rs.getString("lien_icone_csmp"));
                
                CategorieSoinMPs.add(c);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return CategorieSoinMPs;
    }

      public CategorieSoinMP chercherCategorieSoinMP(int id) {
     
        CategorieSoinMP c =new CategorieSoinMP();
        String requete = "SELECT * FROM categorie_soin_mp where id= ?";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
            pst.setInt(1, id);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                
                c.setId(rs.getInt("id"));
                c.setLibelle_categorie_soin_mp(rs.getString("libelle_categorie_soin_mp"));
                c.setLien_icone_csmp(rs.getString("lien_icone_csmp"));
                
            return c;
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return c;
    }
    public List<CategorieSoinMP> rechercherCategorieSoinMP( String caractere) {

        ArrayList<CategorieSoinMP> CategorieSoinMPs = new ArrayList<>();
        String requete = "select * from categorie_soin_mp where libelle_categorie_soin_mp LIKE '%" + caractere + "%'";

        try {
            PreparedStatement pst2 = cn2.prepareStatement(requete);

            pst2.executeQuery();
            System.out.println("Recherche avec succès");

            ResultSet rs = pst2.executeQuery();

            while (rs.next()) {
                CategorieSoinMP c = new CategorieSoinMP();
                c.setId(rs.getInt("id"));
                c.setLibelle_categorie_soin_mp(rs.getString("libelle_categorie_soin_mp"));
                c.setLien_icone_csmp(rs.getString("lien_icone_csmp"));

                CategorieSoinMPs.add(c);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return CategorieSoinMPs;
    }

    public void trierCategorieSoinMP(String o) {

        try {

            String requete2 = "SELECT * FROM categorie_soin_mp order by " + o;
            PreparedStatement pst = cn2.prepareStatement(requete2);
            //   pst.setString(1, o);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                CategorieSoinMP c = new CategorieSoinMP();
                c.setId(rs.getInt("id"));
                c.setLibelle_categorie_soin_mp(rs.getString("libelle_categorie_soin_mp"));
                c.setLien_icone_csmp(rs.getString("lien_icone_csmp"));

                switch (o) {
                    case "id":
                        System.out.println("id = " + c.getId());
                        break;
                    case "libelle_categorie_soin_mp":
                        System.out.println("libellee = " + c.getLibelle_categorie_soin_mp());
                        break;
                    default:
                        System.out.println("Verifier le paramétre svp !!!!!!!!!");

                }
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    
    

}
