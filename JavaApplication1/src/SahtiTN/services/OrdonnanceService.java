/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.Medicament;
import SahtiTN.entities.Ordonnance;
import SahtiTN.tools.MyConnection;
import static java.lang.String.valueOf;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author House
 */
public class OrdonnanceService {
    
    
    public ObservableList<Ordonnance> afficherOrdonnance() {
        
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                o.setContenu(rst.getString("contenu_ord")); 
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
                o.setListe_medicament(rst.getString("liste_medicament"));
                ordonnances.add(o);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ordonnances);
    }
    
    public ObservableList<String> afficherlisteMedicament() {
        
        ObservableList<String> listeMedicament = FXCollections.observableArrayList();
        String req = "SELECT nom_medicament FROM medicament";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            while (rst.next())
            {
                String nom;
                nom=rst.getString("nom_medicament");
                listeMedicament.add(nom);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (listeMedicament);
        
    }
    
    public void ajouterOrdonnance(Ordonnance o){
        try 
        {
            String req="INSERT INTO ordonnance (contenu_ord,date_ord,liste_medicament) "
                    + "VALUES(?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(req);
            pst.setString   (1, o.getContenu());
            pst.setDate     (2, Date.valueOf(o.getDateOrdonnance()));
            pst.setString   (3, o.getListe_medicament());
            pst.executeUpdate();
            System.out.println("Ordonnance Ajouté !");
        } 
        catch (SQLException ex) 
        {
            System.out.println(ex.getMessage());
        }
    }
    
    public void supprimerOrdonnance(int id) throws SQLException {
        String req = "DELETE FROM ordonnance WHERE id=?";
        PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(req);
        pst.setInt(1,id);
        pst.executeUpdate();
        System.out.println("Ordonnance supprimer !");
    }
    
    public void updateOrdonnance(Ordonnance o,int id) throws SQLException {
        String req = "UPDATE ordonnance SET contenu_ord=?,date_ord=?,liste_medicament=? WHERE id=?";
        PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(req);
        pst.setString(1, o.getContenu());
        pst.setDate(2,Date.valueOf(o.getDateOrdonnance()));
        pst.setString(3, o.getListe_medicament());
        pst.setInt(4,id);
        pst.executeUpdate();
        System.out.println("Ordonnance mis a jour !");
    }

    public ObservableList<Ordonnance> rechercheOrdonnance(String Data) {
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance WHERE contenu_ord LIKE'%"+Data+"%'";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                o.setContenu(rst.getString("contenu_ord"));
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
                ordonnances.add(o);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ordonnances);
    }
    
    public ObservableList<Ordonnance> triOrdonnance() {
        
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance ORDER BY date_ord DESC";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                o.setContenu(rst.getString("contenu_ord")); 
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
                o.setListe_medicament(rst.getString("liste_medicament"));
                ordonnances.add(o);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ordonnances);
    }
    
}
