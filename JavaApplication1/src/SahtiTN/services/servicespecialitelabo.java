/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.labo;
import SahtiTN.entities.specialitelabo;
import SahtiTN.iservices.iservicespecialitelabo;
import SahtiTN.tools.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import static java.time.LocalDate.now;
import java.util.List;
import java.util.Random;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author oussama
 */
public class servicespecialitelabo implements iservicespecialitelabo<specialitelabo>{
    public ObservableList<specialitelabo> listesp = FXCollections.observableArrayList();


    @Override
    public void AjouterSpeciliteLabo(specialitelabo t) {
try {
            String requete= "INSERT INTO specialitelabo (idSpecialiteLabo,nomSpecialiteLabo,libelleSpecialiteLabo)"
                    + "VALUES (?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
           // pst.setInt(1, t.getId());
            pst.setInt(1,t.getIdSpecialiteLabo());
           
            pst.setString(2,t.getNomSpecialiteLabo());
            pst.setString(3,t.getLibelleSpecialiteLabo());
           
            //executeupdate
            pst.executeUpdate();
            System.out.println("Specialité ajoutée !");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }  
    }
    
  

    @Override
    public ObservableList displaySpeciliteLabo() {
ObservableList<specialitelabo> spLabo = FXCollections.observableArrayList();

        try {
            String requete = "SELECT * FROM specialitelabo";

            Statement st = MyConnection.getInstance().getCnx().createStatement();
            //contenaire
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                specialitelabo p = new specialitelabo();
                p.setIdSpecialiteLabo(rs.getInt("idSpecialiteLabo"));
           
                p.setNomSpecialiteLabo(rs.getString("nomSpecialiteLabo"));
                p.setLibelleSpecialiteLabo(rs.getString("libelleSpecialiteLabo"));
                
               spLabo.add(p);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return spLabo;
    }

    @Override
    public void supprimerSpeciliteLabo(specialitelabo t) {

try {
            String requete = "DELETE FROM specialitelabo where idSpecialiteLabo=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getIdSpecialiteLabo());
            //
            pst.executeUpdate();
            System.out.println("specialite  supprimé ! ");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
    }

    @Override
    public void updateSpeciliteLabo(specialitelabo t) {
try {
String requete = "UPDATE `specialitelabo` SET  `nomSpecialiteLabo`=?,`libelleSpecialiteLabo`=? WHERE idSpecialiteLabo=?";    
        PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
           

          pst.setString(1,t.getNomSpecialiteLabo()); 
          pst.setString(2,t.getLibelleSpecialiteLabo());
          pst.setInt(3,t.getIdSpecialiteLabo()); 
   
            pst.executeUpdate();
            System.out.println("sp modifié");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    } 

    public ObservableList<specialitelabo> getAll() {
       ObservableList<specialitelabo> specialitelabos = FXCollections.observableArrayList();
        String req = "SELECT * FROM specialitelabo";
        try {
            
            Statement st = MyConnection.getInstance().getCnx().createStatement();

            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                specialitelabo sp = new specialitelabo();
                sp.setIdSpecialiteLabo(rst.getInt("idSpecialiteLabo"));
                sp.setNomSpecialiteLabo(rst.getString("nomSpecialiteLabo"));
                sp.setLibelleSpecialiteLabo(rst.getString("libelleSpecialiteLabo"));
                
                specialitelabos.add(sp);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(servicespecialitelabo.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (specialitelabos);
    }

    
    public String verifSpec(String nomSpecialiteLabo){
        String r = null ;
        String req = "Select * from specialitelabo  WHERE nomSpecialiteLabo= ? ";
        try{
                   
            
            PreparedStatement pre = MyConnection.getInstance().getCnx().prepareStatement(req);
            pre.setString(1, nomSpecialiteLabo);
           
            ResultSet rs = pre.executeQuery();
            while (rs.next()){
                
                
                r = rs.getString("nomSpecialiteLabo");
                
                
            }
        }catch (SQLException ex) {
            Logger.getLogger(servicespecialitelabo.class.getName()).log(Level.SEVERE, null, ex);
        }
        return r;
    }
    
    
    
    public int findIDSpec(String nomSpecialiteLabo){
        int spec = 0  ;
        String req = "Select * from specialitelabo  WHERE nomSpecialiteLabo= ? ";
        try{
            PreparedStatement pre = MyConnection.getInstance().getCnx().prepareStatement(req);
            pre.setString(1, nomSpecialiteLabo);
           
            ResultSet rs = pre.executeQuery();
            while (rs.next()){
                
                
                spec = rs.getInt("idSpecialiteLabo");
                
                
            }
        }catch (SQLException ex) {
            Logger.getLogger(servicespecialitelabo.class.getName()).log(Level.SEVERE, null, ex);
        }
        return spec;
    }
    
    
        
    
    
    public String findByID(int id){
        String spec = null ;
        String req = "Select * from specialitelabo  WHERE idSpecialiteLabo LIKE "+id;
        try{
            PreparedStatement pre = MyConnection.getInstance().getCnx().prepareStatement(req);
           
            ResultSet rs = pre.executeQuery();
            while (rs.next()){
                
                
                spec = rs.getString("nomSpecialiteLabo");
                
                
            }
        }catch (SQLException ex) {
            Logger.getLogger(servicespecialitelabo.class.getName()).log(Level.SEVERE, null, ex);
        }
        return spec;
    }
    
    
        
    }
    
    
    
    



  



  