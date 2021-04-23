/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.Reclamation;
import SahtiTN.interfaces.Ireclamation;
import SahtiTN.tools.MyConnection;
import java.sql.Connection;
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
 * @author eya
 */
public class CrudReclamation implements Ireclamation   <Reclamation> {

    Connection cnx=MyConnection.getInstance().getCnx();

@Override
  public void ajouter(Reclamation t) { 
      try{
            String req="INSERT INTO  reclamation(id,user_id, type_reclamation_id, description_reclamation,reponse )"
                    +"VALUES(?,?,?,?,?)";
            PreparedStatement pst=cnx.prepareStatement(req);
                        pst.setInt(1,t.getId());
                        pst.setInt(2,t.getUser_id());
                        pst.setInt(3,t.getType_reclamation_id());
                        pst.setString(4,t.getDescription_reclamation());
                        pst.setString(5,"Reclamation en cours");
                     
      pst.executeUpdate();
        }catch(SQLException ex){
            Logger.getLogger(CrudType.class.getName()).log(Level.SEVERE, null, ex);
        }
  
    }

    @Override
    public void supprimer(Reclamation t) {
          try {
            String requete = "DELETE FROM reclamation WHERE id=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getId());
            pst.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } }

    @Override
    public void update(Reclamation t) {
         try {
           
            String requete = "UPDATE reclamation SET description_reclamation=? where id=?";
           PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getDescription_reclamation());
            pst.setInt(2,t.getId());
        
            pst.executeUpdate();
            System.out.println("reclamation modifié "+ t.toString());
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } }

    public void updateReponse(Reclamation t) {
         try {
           
            String requete = "UPDATE reclamation SET reponse=? where id=?";
           PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getReponse());
            pst.setInt(2,t.getId());
        
            pst.executeUpdate();
            System.out.println("reclamation modifié "+ t.toString());
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } }
    
    
    
    
    
    
    
    
    @Override
    public List<Reclamation> display() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
    
    @Override
    public  ObservableList<Reclamation> getAll() {
  
         ObservableList<Reclamation> Reclamation = FXCollections.observableArrayList();

         String req = "SELECT * FROM reclamation";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Reclamation s= new Reclamation();
               s.setId(rst.getInt("id"));
                s.setType_reclamation_id(rst.getInt("type_reclamation_id"));
                s.setDescription_reclamation(rst.getString("description_reclamation"));
                s.setReponse(rst.getString("reponse"));

               
                Reclamation.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Reclamation);
    }
    
    
    public  ObservableList<Reclamation> getAllByUser(int id ) {
  
         ObservableList<Reclamation> Reclamation = FXCollections.observableArrayList();

         String req = "SELECT * FROM reclamation where user_id='"+id+"'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Reclamation s= new Reclamation();
               s.setId(rst.getInt("id"));
                s.setType_reclamation_id(rst.getInt("type_reclamation_id"));
                s.setDescription_reclamation(rst.getString("description_reclamation"));
                s.setReponse(rst.getString("reponse"));

               
                Reclamation.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Reclamation);
    }
    
    
    
    public void update(int id, String t){
   
        try {
           
            String requete = "UPDATE reclamation SET description_reclamation=? where id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
           
            pst.setString(1, t);
            pst.setInt(2,id);
        
            pst.executeUpdate();
            System.out.println("reclamation modifié !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
   
    }
    
    
    
     public  ObservableList<Reclamation> findAllNoReponse(int id ) {
  
         ObservableList<Reclamation> Reclamation = FXCollections.observableArrayList();

         String req = "SELECT * FROM reclamation where reponse='"+"Reclamation en cours"+"'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Reclamation s= new Reclamation();
               s.setId(rst.getInt("id"));
                s.setType_reclamation_id(rst.getInt("type_reclamation_id"));
                s.setDescription_reclamation(rst.getString("description_reclamation"));
                s.setReponse(rst.getString("reponse"));

               
                Reclamation.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Reclamation);
    }
     
     
     public  ObservableList<Reclamation> findAllReponse(int id ) {
  
         ObservableList<Reclamation> Reclamation = FXCollections.observableArrayList();

         String req = "SELECT * FROM reclamation where reponse='"+"Reclamation en cours"+"'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Reclamation s= new Reclamation();
               s.setId(rst.getInt("id"));
                s.setType_reclamation_id(rst.getInt("type_reclamation_id"));
                s.setDescription_reclamation(rst.getString("description_reclamation"));
                s.setReponse(rst.getString("reponse"));

               
                Reclamation.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Reclamation);
    }
    
    
    
     public List<Reclamation> Recherche( String reclamation) 
     {

            ObservableList<Reclamation> Reclamation = FXCollections.observableArrayList();

         String req = "SELECT * FROM reclamation where description_reclamation LIKE '" + reclamation + "%'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Reclamation s= new Reclamation();
               s.setId(rst.getInt("id"));
                s.setType_reclamation_id(rst.getInt("type_reclamation_id"));
                s.setDescription_reclamation(rst.getString("description_reclamation"));
                s.setReponse(rst.getString("reponse"));

               
                Reclamation.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Reclamation);
     }

      public ObservableList<Reclamation> getAllTrier() {
     
  
         ObservableList<Reclamation> Reclamation = FXCollections.observableArrayList();

         String req = "SELECT * FROM reclamation order by description_reclamation";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Reclamation s= new Reclamation();
               s.setId(rst.getInt("id"));
                s.setType_reclamation_id(rst.getInt("type_reclamation_id"));
                s.setDescription_reclamation(rst.getString("description_reclamation"));
                s.setReponse(rst.getString("reponse"));

               
                Reclamation.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Reclamation);
     }
    
    
    
    
    
}
