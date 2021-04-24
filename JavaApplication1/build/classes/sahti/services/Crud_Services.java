/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sahti.services;


import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import sahti.entities.Services;
import sahti.interfaces.Interface_Services;
import sahti.tools.MyConnection;


/**
 *
 * @author allouch
 */
public class Crud_Services implements Interface_Services   <Services> {

    Connection cnx=MyConnection.getInstance().getCnx();

@Override
  public void add(Services S) { 
      try{
            String req="INSERT INTO  Services{" + "nom_centre_medical, service, id_services, duree'}';"
                    +"VALUES(?,?,?,?)";
            PreparedStatement pst=cnx.prepareStatement(req);
                        pst.setString(1, S.get_nom_centre_medical);
                        pst.setString(2, S.get_service);
                        pst.setInt(3,S.get_id_services);
                        pst.setInt(4,S.get_duree);
        }catch(SQLException ex){
            Logger.getLogger(Crudidset_id_services.class.getName()).log(Level.SEVERE, null, ex);
        }
  
    }

    @Override
    public void delete(Services S) {
          try {
            String requete = "DELETE FROM Service WHERE id_services=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1,S.get_id_services);
            pst.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } }

    @Override
    public void update(Services S) {
         try {
           
            String requete = "UPDATE Services SET nom_centre_medical=? ,duree=?  where id_services=?";
           PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
                        pst.setInt(1, S.get_nom_centre_medical);
                        pst.setInt(2,S.get_duree);
                        pst.setInt(3,S.get_id_services)));
        
            pst.executeUpdate();
            System.out.println(" Votre Service est modifié "+ S.toString());
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } }

    @Override
    public List<Services> display() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    @Override
    public  ObservableList<Services> getAll() {
  
         ObservableList<Services> Services = FXCollections.observableArrayList();

         String req = "SELECT * FROM Services";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Services S= new Services();
                C.set_nom_centre_medical(rst.getInt("nom_centre_medical"));
                C.set_service(rst.getString("services"));
                C.set_id_services(rst.getString("id_services"));
                C.set_duree(rst.getInt("duree"));

               
                Services.add(S);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(Crud_Services.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Services);
    }
    
    
    public  ObservableList<Services> getAllByCentreMed(int nom_centre_medical ) {
  
         ObservableList<Services> Services = FXCollections.observableArrayList();

         String req = "SELECT * FROM Services where nom_centre_medical='"+nom_centre_medical+"'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Services S= new Services();
                C.set_nom_centre_medical(rst.getInt("nom_centre_medical"));
                C.set_service(rst.getString("services"));
                C.set_id_services(rst.getString("id_services"));
                C.set_duree(rst.getInt("duree"));

               
                Services.add(S);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(Crud_Services.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (Services);
    }
}