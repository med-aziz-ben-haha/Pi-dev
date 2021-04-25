/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.Medicament;
import SahtiTN.tools.MyConnection;
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
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

/**
 *
 * @author House
 */
public class MedicamentService {
    
        
    public ObservableList<Medicament> afficherMedicament() {
        ObservableList<Medicament> medicaments = FXCollections.observableArrayList();
        String req = "SELECT * FROM medicament";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Medicament M = new Medicament();
                M.setId(rst.getInt("id"));
                M.setNom_medicament(rst.getString("nom_medicament"));
                M.setDate_modif(rst.getDate("date_modif").toLocalDate());
                M.setDispo(rst.getInt("dispo")); 
                
                Image image = new Image(rst.getString("img_medicament"));
                ImageView imgV = new ImageView(image);
                imgV.setFitHeight(80);
                imgV.setFitWidth(80);
                M.setShowimage(imgV);
                
                M.setDescmedicament(rst.getString("descmedicament"));
                medicaments.add(M);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (medicaments);
    }
    
    public void ajouterMedicament(Medicament m){
        try {
            String req="INSERT INTO medicament (nom_medicament,date_modif,dispo,img_medicament,descmedicament) "
                    + "VALUES(?,?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(req);
            pst.setString   (1, m.getNom_medicament());
            pst.setDate     (2, Date.valueOf(m.getDate_modif()));
            pst.setInt      (3, m.getDispo());
            pst.setString   (4, m.getImg_medicament());
            pst.setString   (5, m.getDescmedicament());
            pst.executeUpdate();
            System.out.println("Medicament ajoutée!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
        
    public void supprimerMedicament(int id) throws SQLException {
        String req = "DELETE FROM medicament WHERE id=?";
        PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(req);
        pst.setInt(1,id);
        pst.executeUpdate();
        System.out.println("Medicament supprimer !");
    }

    public void updateMedicament(Medicament m,int id) throws SQLException {
        String req = "UPDATE medicament SET nom_medicament=?,date_modif=?,dispo=?,img_medicament=?,descmedicament=? WHERE id=?";
        PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(req);
        pst.setString(1, m.getNom_medicament());
        pst.setDate(2, Date.valueOf(m.getDate_modif()));
        pst.setInt(3, m.getDispo());
        pst.setString(4, m.getImg_medicament());
        pst.setString(5, m.getDescmedicament());
        pst.setInt(6,id);
        pst.executeUpdate();
        System.out.println("Medicament mis a jour !");
    }
    
    public ObservableList<Medicament> rechercheMedicament(String Data) {
        ObservableList<Medicament> medicaments = FXCollections.observableArrayList();
        String req = "SELECT * FROM medicament WHERE nom_medicament LIKE'%"+Data+"%'";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Medicament M = new Medicament();
                M.setId(rst.getInt("id"));
                M.setNom_medicament(rst.getString("nom_medicament"));
                M.setDate_modif(rst.getDate("date_modif").toLocalDate());
                M.setDispo(rst.getInt("dispo")); 
                
                Image image = new Image(rst.getString("img_medicament"));
                ImageView imgV = new ImageView(image);
                imgV.setFitHeight(80);
                imgV.setFitWidth(80);
                M.setShowimage(imgV);
                
                M.setDescmedicament(rst.getString("descmedicament"));
                medicaments.add(M);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (medicaments);
    }
    public ObservableList<Medicament> triMedicament(String Data,String Data2) {
        ObservableList<Medicament> medicaments = FXCollections.observableArrayList();
        String req = "SELECT * FROM medicament ORDER BY "+Data+" "+Data2+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Medicament M = new Medicament();
                M.setId(rst.getInt("id"));
                M.setNom_medicament(rst.getString("nom_medicament"));
                M.setDate_modif(rst.getDate("date_modif").toLocalDate());
                M.setDispo(rst.getInt("dispo")); 
                
                Image image = new Image(rst.getString("img_medicament"));
                ImageView imgV = new ImageView(image);
                imgV.setFitHeight(80);
                imgV.setFitWidth(80);
                M.setShowimage(imgV);
                
                M.setDescmedicament(rst.getString("descmedicament"));
                medicaments.add(M);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (medicaments);
    }
    public  String DeterminerNomById(int data) {
        String Nom="";
        String req = "SELECT img_medicament FROM medicament WHERE id="+data+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
           
            while (rst.next())
            {
                Nom=rst.getString("img_medicament");
            }  
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return Nom;
    }
}
