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
import sahti.entities.CentreMed;
import sahti.interfaces.Interface_CentreMed;
import sahti.tools.MyConnection;


/**
 *
 * @author allouch
 */
public class Crud_CentreMed implements Interface_CentreMed   <CentreMed> {

    Connection cnx=MyConnection.getInstance().getCnx();

@Override
  public void add(CentreMed C) { 
      try{
            String req="INSERT INTO  CentreMed{" + "id_centre_medical, nom_centre_medical, adresse, Type, Num_Tel, mail '}';"
                    +"VALUES(?,?,?,?,?,?)";
            PreparedStatement pst=cnx.prepareStatement(req);
                        pst.setInt(1,C.get_id_centre_medical);
                        pst.setString(2,C.get_nom_centre_medical);
                        pst.setString(3,C.get_adresse);
                        pst.setString(4,C.get_Type);
                        pst.setInt(5,C.get_Num_Tel);
                        pst.setString(6,C.get_mail);
        }catch(SQLException ex){
            Logger.getLogger(Crud_CentreMed.class.getName()).log(Level.SEVERE, null, ex);
        }
  
    }

    @Override
    public void delete(CentreMed C) {
          try {
            String requete = "DELETE FROM CentreMed WHERE id_centre_medical=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1,C.get_id_centre_medical);
            pst.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } }

    @Override
    public void update(CentreMed C) {
         try {
           
            String requete = "UPDATE CentreMed SET adresse=? , Num_Tel=? , mail=?  where id_centre_medical=?";
           PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, C.get_adresse());
            pst.setInt(2, C.get_ Num_Tel());
            pst.setString(3, C.get_mail());
            pst.setInt(4,C.get_id_centre_medical()));
        
            pst.executeUpdate();
            System.out.println(" Votre centre médicale est modifié "+ C.toString());
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } }

    @Override
    public List<CentreMed> display() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    @Override
    public  ObservableList<CentreMed> getAll() {
  
         ObservableList<CentreMed> CentreMed = FXCollections.observableArrayList();

         String req = "SELECT * FROM CentreMed";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                CentreMed C= new CentreMed();
                C.set_id_centre_medical(rst.getInt("id_centre_medical"));
                C.set_nom_centre_medical(rst.getString("nom_centre_medical"));
                C.set_adresse(rst.getString("adresse"));
                C.set_Type(rst.getString("Type"));
                C.set_Num_Tel(rst.getInt("Num_Tel"));
                C.set_mail(rst.getString("mail"));

               
                CentreMed.add(C);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(Crud_CentreMed.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (CentreMed);
    }
    
    
    public  ObservableList<CentreMed> getAllByUser(int id_centre_medical ) {
  
         ObservableList<CentreMed> CentreMed = FXCollections.observableArrayList();

         String req = "SELECT * FROM CentreMed where id_centre_medical='"+id_centre_medical+"'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                CentreMed C= new CentreMed();
                C.set_id_centre_medical(rst.getInt("id_centre_medical"));
                C.set_nom_centre_medical(rst.getString("nom_centre_medical"));
                C.set_adresse(rst.getString("adresse"));
                C.set_Type(rst.getString("Type"));
                C.set_Num_Tel(rst.getInt("Num_Tel"));
                C.set_mail(rst.getString("mail"));

               
                CentreMed.add(C);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(Crud_CentreMed.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (CentreMed);
    }

    
    
    
     public  ObservableList<CentreMed> findAllCentreMed(String Type ) {
  
         ObservableList<CentreMed> CentreMed = FXCollections.observableArrayList();

         String req = "SELECT * FROM CentreMed where Type='"+"CentreMed en cours"+"'";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                CentreMed C= new CentreMed();
                C.set_id_centre_medical(rst.getInt("id_centre_medical"));
                C.set_nom_centre_medical(rst.getString("nom_centre_medical"));
                C.set_adresse(rst.getString("adresse"));
                C.set_Type(rst.getString("Type"));
                C.set_Num_Tel(rst.getInt("Num_Tel"));
                C.set_mail(rst.getString("mail"));

               
                CentreMed.add(C);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(Crud_CentreMed.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (CentreMed);
    }
}