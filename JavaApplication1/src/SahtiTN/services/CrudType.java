/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.Type;
import SahtiTN.interfaces.Itype;
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

public class CrudType implements Itype   <Type>  {
 Connection cnx=MyConnection.getInstance().getCnx();
 PreparedStatement pst;
    private Statement ste;
    
    @Override
    public void ajouter(Type t) {
        try{
            String req="INSERT INTO  type_reclamation(id,type_reclamation)"
                    +"VALUES(?,?)";
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setInt(1,t.getId());
             pst.setString(2,t.getType_reclamation());
              
               pst.executeUpdate();
        }catch(SQLException ex){
            Logger.getLogger(CrudType.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void supprimer(Type t) {
    try {
            String requete = "DELETE FROM type_reclamation WHERE id=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getId());
            pst.executeUpdate();
            System.out.println("Type supprimer");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }}



    public void update(int id, String t){
   
        try {
           
            String requete = "UPDATE type_reclamation SET type_reclamation=? where id=?";
 PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);           
            pst.setString(1, t);
            pst.setInt(2,id);
        
            pst.executeUpdate();
            System.out.println("Type modifié !" );
                        System.out.println(requete);

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
   
    }

    
       public int GetIdFromNom( String type_reclamation) {

        ArrayList<Type> Types = new ArrayList<>();
        String requete = "select * from type_reclamation where type_reclamation LIKE '" + type_reclamation + "%'";
int  t=0;
        try {
            PreparedStatement pst2 = cnx.prepareStatement(requete);

            pst2.executeQuery();
            System.out.println("Recherche avec succes");

            ResultSet rs = pst2.executeQuery();

            while (rs.next()) {
                
              t=rs.getInt("id");
               
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return t;
    }

    public Type Gettype( int id) {

        ArrayList<Type> Types = new ArrayList<>();
        String requete = "select * from type_reclamation where id=? ";
Type type= new Type();
        try {
            PreparedStatement pst2 = cnx.prepareStatement(requete);
  pst2.setInt(1,id);
            pst2.executeQuery();
         

            ResultSet rs = pst2.executeQuery();

            while (rs.next()) {
                
            
                type.setId(rs.getInt("id"));
                type.setType_reclamation(rs.getString("type_reclamation"));
               
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return type;
    }
    @Override
    public List<Type> display() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public ObservableList<Type> getAll() {
     
  
         ObservableList<Type> type = FXCollections.observableArrayList();
        String req = "SELECT * FROM type_reclamation";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Type s= new Type();
                s.setId(rst.getInt("id"));
                s.setType_reclamation(rst.getString("type_reclamation"));
                
               
                type.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (type);
     }

     public ObservableList<Type> getAllTrier() {
     
  
         ObservableList<Type> type = FXCollections.observableArrayList();
        String req = "SELECT * FROM type_reclamation order by type_reclamation";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Type s= new Type();
                s.setId(rst.getInt("id"));
                s.setType_reclamation(rst.getString("type_reclamation"));
                
               
                type.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (type);
     }
    
    
      public ObservableList<String> getAllNames() {
     
  
         ObservableList<String> type = FXCollections.observableArrayList();
        String req = "SELECT * FROM type_reclamation";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){               
                String S=rst.getString("type_reclamation");
                type.add(S);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (type);
     }
  public ObservableList<Type> Recher(String typeR) {
     
  
         ObservableList<Type> type = FXCollections.observableArrayList();
        String req = "select * from type_reclamation where type_reclamation LIKE '" + typeR + "%'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Type s= new Type();
                s.setId(rst.getInt("id"));
                s.setType_reclamation(rst.getString("type_reclamation"));
                
               
                type.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (type);
     }
    public ObservableList<String> getAllListView() {
     
  
         ObservableList<String> types = FXCollections.observableArrayList();
        String req = "SELECT * FROM type_reclamation";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                
                
               String t=rst.getString("type_reclamation");
                
               
                types.add(t);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CrudReclamation.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (types);
     }
    
    
    
    
    
    
    
    
    
    
    
    @Override
    public void update(Type t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
   
    
    
    
   /* public List<Type> rechercherType(int id, String type_reclamation) {

        ArrayList<Type> Types = new ArrayList<>();
        String requete = "select * from type_reclamation where " + id + " LIKE '" + type_reclamation + "%'";

        try {
            PreparedStatement pst2 = cnx.prepareStatement(requete);

            pst2.executeQuery();
            System.out.println("Recherche avec succes");

            ResultSet rs = pst2.executeQuery();

            while (rs.next()) {
                Type s = new Type();
                s.setId(rs.getInt("id"));
                s.setType_reclamation(rs.getString("type_reclamation"));
               

                Types.add(s);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return Types;
    }*/

   
}
    

    

