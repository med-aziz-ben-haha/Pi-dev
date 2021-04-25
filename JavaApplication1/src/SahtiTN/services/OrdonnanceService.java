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
    
    
        public ObservableList<Ordonnance> afficherOrdonnanceBack(int Data) {
        
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance WHERE medecin_id="+Data+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                
                String ListeNomMedicament="";
                ObservableList<Integer> ListeId= TrouverTtMed(o.getId());
                for (Integer m:ListeId)    
                {  
                    String NomMed= GetNomFrom_Medicament(m);
                    ListeNomMedicament+= NomMed+" " ;
                }
                
                o.setListe_medicament(ListeNomMedicament);
                o.setContenu(rst.getString("contenu_ord")); 
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
                ordonnances.add(o);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ordonnances);
    }
        
        public ObservableList<Ordonnance> afficherOrdonnanceFront(int Data) {
        
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance WHERE user_id="+Data+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                
                String ListeNomMedicament="";
                ObservableList<Integer> ListeId= TrouverTtMed(o.getId());
                for (Integer m:ListeId)    
                {  
                    String NomMed= GetNomFrom_Medicament(m);
                    ListeNomMedicament+= NomMed+" " ;
                }
                
                o.setListe_medicament(ListeNomMedicament);
                o.setContenu(rst.getString("contenu_ord")); 
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
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
//******************************************************************************************
//******************************************************************************************
        public ObservableList<String> afficherlistePatient() {
        
        ObservableList<String> listePatient = FXCollections.observableArrayList();
        String req = "SELECT nom FROM user WHERE role=1";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            while (rst.next())
            {
                String nom;
                nom=rst.getString("nom");
                listePatient.add(nom);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (listePatient);   
    }
    
        public  int DeterminerIDByNom(String NomP) {
        int id=0;
        String req = "SELECT id FROM user WHERE nom LIKE '%"+NomP+"%'";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            while (rst.next())
            {
                id=rst.getInt("id");
            }  
        } catch (SQLException ex) {
            Logger.getLogger(OrdonnanceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return id;
    }
        
        public  String DeterminerNomById(int data) {
        String Nom="";
        String req = "SELECT nom FROM user WHERE id="+data+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
           
            while (rst.next())
            {
                Nom=rst.getString("nom");
            }  
        } catch (SQLException ex) {
            Logger.getLogger(OrdonnanceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return Nom;
    }
  
        public void ajouterOrdonnance(Ordonnance o){
        try 
        {
            String req="INSERT INTO ordonnance (user_id,contenu_ord,date_ord,medecin_id) "
                    + "VALUES(?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(req);
            pst.setInt      (1, o.getUser_id());
            pst.setString   (2, o.getContenu());
            pst.setDate     (3, Date.valueOf(o.getDateOrdonnance()));
            pst.setInt      (4, o.getMedecin_id());
            pst.executeUpdate();
            System.out.println("Ordonnance Ajouté !");
        } 
        catch (SQLException ex) 
        {
            System.out.println(ex.getMessage());
        }
    }
//********************************************************************************************  
//******************************************************************************************** 
        public void supprimerOrdonnance(int id) throws SQLException {
        String req = "DELETE FROM ordonnance WHERE id=?";
        PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(req);
        pst.setInt(1,id);
        pst.executeUpdate();
        System.out.println("Ordonnance supprimer !");
    }
    
        public void updateOrdonnance(Ordonnance o,int id) throws SQLException {
        String req = "UPDATE ordonnance SET contenu_ord=?,date_ord=? WHERE id=?";
        PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(req);
        pst.setString(1, o.getContenu());
        pst.setDate(2,Date.valueOf(o.getDateOrdonnance()));
        pst.setInt(3,id);
        pst.executeUpdate();
        System.out.println("Ordonnance mis a jour !");
    }

        public ObservableList<Ordonnance> rechercheOrdonnanceBack(String Data,int Data2){
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance WHERE contenu_ord LIKE'%"+Data+"%'AND medecin_id="+Data2+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                
                String ListeNomMedicament="";
                ObservableList<Integer> ListeId= TrouverTtMed(o.getId());
                for (Integer m:ListeId)    
                {  
                    String NomMed= GetNomFrom_Medicament(m);
                    ListeNomMedicament+= NomMed+" " ;
                }
                
                o.setListe_medicament(ListeNomMedicament);
                
                o.setContenu(rst.getString("contenu_ord"));
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
                ordonnances.add(o);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ordonnances);
    }

        public ObservableList<Ordonnance> rechercheOrdonnanceFront(String Data,int Data2) {
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance WHERE contenu_ord LIKE'%"+Data+"%'AND user_id="+Data2+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                
                String ListeNomMedicament="";
                ObservableList<Integer> ListeId= TrouverTtMed(o.getId());
                for (Integer m:ListeId)    
                {  
                    String NomMed= GetNomFrom_Medicament(m);
                    ListeNomMedicament+= NomMed+" " ;
                }
                
                o.setListe_medicament(ListeNomMedicament);
                o.setContenu(rst.getString("contenu_ord"));
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
                ordonnances.add(o);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ordonnances);
    }
   
        public ObservableList<Ordonnance> triOrdonnance(int Data) {
        
        ObservableList<Ordonnance> ordonnances = FXCollections.observableArrayList();
        String req = "SELECT * FROM ordonnance WHERE medecin_id= "+Data+" ORDER BY date_ord DESC";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next())
            {
                Ordonnance o = new Ordonnance();
                o.setId(rst.getInt("id"));
                
                String ListeNomMedicament="";
                ObservableList<Integer> ListeId= TrouverTtMed(o.getId());
                for (Integer m:ListeId)    
                {  
                    String NomMed= GetNomFrom_Medicament(m);
                    ListeNomMedicament+= NomMed+" " ;
                }
                
                o.setListe_medicament(ListeNomMedicament);
                
                o.setContenu(rst.getString("contenu_ord")); 
                o.setDateOrdonnance(rst.getDate("date_ord").toLocalDate());
                ordonnances.add(o);
            }   
        } catch (SQLException ex) {
            Logger.getLogger(MedicamentService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ordonnances);
    }
    

//***************************************************************************
        // AJOUT MANY TO MANY
//***************************************************************************
        public  int GetIdFrom_Medicament(String nomMed){
        try{
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery("SELECT id FROM medicament WHERE nom_medicament= '"+nomMed+"'");
            rs.next();
            int h = rs.getInt(1);
            return h;
        }catch(Exception ex){
            return 0;
        }
    }
         
        public  void InsertInto_Ord_Med(int Ord_id, int Med_id){
        try{
            PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement("INSERT INTO ordonnance_medicament VALUES(?,?)");
            pst.setInt(1, Ord_id);
            pst.setInt(2, Med_id);
            pst.executeUpdate();
        }   catch(Exception ex){
            System.out.println(ex);
        }
    }
        
        public  int GetIdFrom_Ord(String Contenu){
            try{
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery("SELECT id FROM ordonnance WHERE contenu_ord= '"+Contenu+"'");
            int h = 0;
            while(rs.next()){
                h = rs.getInt(1);
            }
            return h;
        }catch(Exception ex){
            return 0;
        }  
    }
         
     
//***************************************************************************
        // AFFICHAGE MANY TO MANY
//***************************************************************************    
        public  String GetNomFrom_Medicament(int id){
        String h="";    
        try{
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery("SELECT nom_medicament FROM medicament WHERE id= '"+id+"'");
            rs.next();
            h = rs.getString("nom_medicament");
            return h;
        }catch(Exception ex){
            return h;
        }
    }
    
        public ObservableList<Integer> TrouverTtMed(int idOrd) {
           ObservableList<Integer> ListeIdMed = FXCollections.observableArrayList();
        String req = "SELECT medicament_id FROM ordonnance_medicament WHERE ordonnance_id= "+idOrd+"";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            while (rst.next())
            {
                ListeIdMed.add(rst.getInt("medicament_id"));
            }  
        } catch (SQLException ex) {
            Logger.getLogger(OrdonnanceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (ListeIdMed);
    }
//***************************************************************************
        // SUPPRIMER MANY TO MANY
//*************************************************************************** 
        
        public void DeleteFrom_Ord_Med(int id) throws SQLException {
        String req = "DELETE FROM ordonnance_medicament WHERE ordonnance_id=?";
        PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(req);
        pst.setInt(1,id);
        pst.executeUpdate();
        System.out.println("Ordonnance_medicament supprimer !");
    }

}
