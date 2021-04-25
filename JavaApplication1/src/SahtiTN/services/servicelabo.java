/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.labo;
import SahtiTN.entities.specialitelabo;
import SahtiTN.iservices.iservicelabo;
import SahtiTN.iservices.iservicespecialitelabo;
import SahtiTN.tools.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import static java.time.LocalDate.now;
import java.util.ArrayList;
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
public class servicelabo implements iservicelabo<labo> {
        public ObservableList<labo> listelab = FXCollections.observableArrayList();


    @Override
    public void AjouterLabo(labo t) {
try {
            String requete= "INSERT INTO labo (idLabo,nomLabo,adresseLabo,telLabo,emailLabo,idSpecialiteLabo)"
                    + "VALUES (?,?,?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
           // pst.setInt(1, t.getId());
            pst.setInt(1,t.getIdLabo());
           
            pst.setString(2,t.getNomLabo());
            pst.setString(3,t.getAdresseLabo());
            pst.setInt(4,t.getTelLabo());
            pst.setString(5,t.getEmailLabo());
            pst.setInt(6,t.getIdSpecialiteLabo());
           
            //executeupdate
            pst.executeUpdate();
            System.out.println("Laboratoire ajouté !");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }  
    }

    
    
    
    
    
    @Override
    public void supprimerLabo(labo t) {
try {
            String requete = "DELETE FROM labo where idLabo=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getIdLabo());
            //
            pst.executeUpdate();
            System.out.println("Labo  supprimé ! ");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
    }

    @Override
    public void updateLabo(labo t) {
        try {
        String requete = "UPDATE `labo` SET  `nomLabo`=?,`adresseLabo`=?,`telLabo`=?,`emailLabo`=?,`idSpecialiteLabo`=? WHERE idLabo=?";    
        PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
           

          pst.setString(1,t.getNomLabo()); 
          pst.setString(2,t.getAdresseLabo()); 
          pst.setInt(3,t.getTelLabo()); 
          pst.setString(4,t.getEmailLabo()); 
          pst.setInt(5,t.getIdSpecialiteLabo()); 
          
          pst.setInt(6,t.getIdLabo()); 
   
            pst.executeUpdate();
            System.out.println("labo modifié");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public List<labo> displayLabo() {
ObservableList<labo> labLabo = FXCollections.observableArrayList();

        try {
            String requete = "SELECT * FROM labo";

            Statement st = MyConnection.getInstance().getCnx().createStatement();
            //contenaire
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                labo p = new labo();
                p.setIdLabo(rs.getInt("idLabo"));
           
                p.setNomLabo(rs.getString("nomLabo"));
                p.setAdresseLabo(rs.getString("adresseLabo"));
                p.setTelLabo(rs.getInt("telLabo"));
                p.setEmailLabo(rs.getString("emailLabo"));
                p.setIdSpecialiteLabo(rs.getInt("idSpecialiteLabo"));
              
            int x = p.getIdSpecialiteLabo();
            String s = new servicespecialitelabo().findByID(x);
                    
                p.setNomSpecialiteLabo(s);
                
               labLabo.add(p);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return labLabo;
    }

   
    

public int chercherSpecLaboPid(String ch) {

        int id_cat = 0;
        String requete = "SELECT idSpecialiteLabo FROM specialitelabo where nomSpecialiteLabo= ?  ";

        try {
            
            
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            //contenaire
            ResultSet rs =  st.executeQuery(requete);
            
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
        String requete = "SELECT nomSpecialiteLabo FROM specialitelabo";

        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            //contenaire
            ResultSet rs =  st.executeQuery(requete);
            

            while (rs.next()) {

                titres.add(rs.getString("nomSpecialiteLabo"));
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return titres;
    }
    
    public String cherchercattitre(int id) {

        String titre = "";
        String requete = "SELECT nomSpecialiteLabo FROM specialitelabo where idSpecialiteLabo= ?";

        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            //contenaire
            ResultSet rs =  st.executeQuery(requete);
            
            while (rs.next()) {

                titre=rs.getString("nomSpecialiteLabo");
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return titre;
    }    
    
      
    /*
    @Override
public void updateCombo(){

    try {       
        String requete= "select * from specialitelabo";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
        ResultSet rs = pst.executeQuery();
        while (rs.next()){
        txt_spec_l2.addItem(rs.getString(Col_nom))
        }
        
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
}
 */

    //public Object getAll() {
    //    throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    //}
    
    
    
    
    public ObservableList<labo> getAll() {
        ObservableList<labo> labos = FXCollections.observableArrayList();
        String req = "SELECT * FROM labo";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                labo lab = new labo();
                lab.setIdLabo(rst.getInt("idLabo"));
                lab.setNomLabo(rst.getString("nomLabo"));
                lab.setAdresseLabo(rst.getString("adresseLabo"));
                lab.setTelLabo(rst.getInt("telLabo"));
                lab.setEmailLabo(rst.getString("emailLabo"));
              
                int i = rst.getInt("idSpecialiteLabo");
                //System.out.println("id specialité :"+i);
                String spec =new servicespecialitelabo().findByID(i);
            
                //lab.setIdSpecialiteLabo(rst.getInt"idSpecialiteLabo");
                lab.setIdSpecialiteLabo(rst.getInt("idSpecialiteLabo"));

                labos.add(lab);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(servicespecialitelabo.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (labos);
    }
    
   
    /*
    public ArrayList<labo> getAlll() {
        ArrayList<labo> labos = new ArrayList();
        String req = "SELECT * FROM labo";
        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                labo lab = new labo();
                lab.setIdLabo(rst.getInt("idLabo"));
                lab.setNomLabo(rst.getString("nomLabo"));
                lab.setAdresseLabo(rst.getString("adresseLabo"));
                lab.setTelLabo(rst.getInt("telLabo"));
                lab.setEmailLabo(rst.getString("emailLabo"));
              
                int i = rst.getInt("idSpecialiteLabo");
                System.out.println("id specialité :"+i);
                String spec =new servicespecialitelabo().findByID(i);
            
                lab.setNomSpecialiteLabo(spec);
                
                labos.add(lab);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(servicespecialitelabo.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (labos);
    }
    
    */
    
}
