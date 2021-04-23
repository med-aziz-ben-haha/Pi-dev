/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Reclamation;
import SahtiTN.services.CrudReclamation;
import SahtiTN.tools.MyConnection;
import SahtiTN.tools.Session;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import static java.time.zone.ZoneRulesProvider.refresh;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class GestionReclamationBackController implements Initializable {

  
    @FXML
    private ListView<Reclamation> tableView;
 
    @FXML
    private Button btnUpdate;
    @FXML
    private TextField tfReponse;
    @FXML
    private TextField tfdescription;
    ObservableList<PieChart.Data> piechartdata;
    @FXML
    private PieChart piechart;
    @FXML
    private Hyperlink gestion;
    @FXML
    private Label id_ID;
    @FXML
    private TextField rechAvan;
    @FXML
    private Button btnTrier;
    @FXML
    private Hyperlink rec;
    @FXML
    private Hyperlink btn_deconnexion;
    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private Hyperlink cat_Stat;
    @FXML
    private Hyperlink stat_soin;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        recupererReclamation();
       Stat();
       piechart.setData(piechartdata);
      refresh();
    }    

    @FXML
    private void btnUpdateOnAction(ActionEvent event) { 
        //Send notification
                              Notifications notificationBuild = Notifications.create()
                                      .title("Traitement Reclamation")
                                      .text("Traitement de reclamation est envoyé au client avec succes")
                                      .graphic(null)
                                      .hideAfter(Duration.seconds(5))
                                      .position(Pos.CENTER)
                                      .onAction(new EventHandler<ActionEvent>() {
                                  @Override
                                  public void handle(ActionEvent event) {
                                      System.out.println("click here");
                                  }
                                  
                              });
                              notificationBuild.show();
                                      
        
        
          Reclamation p = tableView.getSelectionModel().getSelectedItem();
             p.setReponse(tfReponse.getText());
  CrudReclamation crs = new CrudReclamation();
            crs.updateReponse(p);
          refresh();
        
    }
    
    private void showAll()
    {     tableView.getItems().clear();

        ObservableList<Reclamation> list = (ObservableList<Reclamation>) new CrudReclamation().getAll();    
        
        tableView.setItems(list); 
    
    }
   
 private void recupererReclamation(){
    
    tableView.setOnMouseClicked(e->{
        Reclamation r= tableView.getSelectionModel().getSelectedItem();
        tfReponse.setText(r.getReponse());
       tfdescription.setText(r.getDescription_reclamation());
    });  
    
 }
    
     
   
    private void refresh()
    {       piechart.setData(piechartdata);

         showAll();
    tfReponse.clear();
     tfdescription.clear();
    }
 
    
    private Connection con;
    private ResultSet rs=null;
    private ResultSet rs1=null;
    private PreparedStatement pst,pst1;
    
    private void Stat(){
        
           ArrayList<Integer> np=new ArrayList<Integer>();
ArrayList<String> cat=new ArrayList<String>();
    Connection cnx=MyConnection.getInstance().getCnx();

        piechartdata=FXCollections.observableArrayList();
    try {
       
        pst=cnx.prepareStatement("select * from type_reclamation");
        rs=pst.executeQuery();
       
        while(rs.next() )
        {
           
             
            pst1=cnx.prepareStatement("select count(*) as countab FROM reclamation WHERE type_reclamation_id="+rs.getInt("id"));
           rs1=pst1.executeQuery(); 
        while(rs1.next())
        {       
            int i=Integer.valueOf(rs1.getString("countab"));
            piechartdata.add(new PieChart.Data(rs.getString("type_reclamation"),i));
            
            np.add(i);
            cat.add(rs.getString("type_reclamation"));
        }
      
    }
    } catch (SQLException ex) {
        System.out.println("stat reclamation");
    } 
     piechart.setData(piechartdata);
      }

   

    @FXML
    private void rechAvanOnAction(KeyEvent event) {
        
        
           tableView.getItems().clear();

        ObservableList<Reclamation> list = (ObservableList<Reclamation>) new CrudReclamation().Recherche(rechAvan.getText());    
       
        tableView.setItems(list); 
    }

    @FXML
    private void btnTrierOnAction(ActionEvent event) {
        
         
        
           tableView.getItems().clear();

        ObservableList<Reclamation> list = (ObservableList<Reclamation>) new CrudReclamation().getAllTrier();    
        

        tableView.setItems(list); 
        
    }

      @FXML
    private void recOnAction(ActionEvent event) {
        
        
           FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionReclamationBack.fxml"));
        try {
            Parent root = loader.load();
      GestionReclamationBackController apc = loader.getController();
           tableView.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
    
    @FXML
    private void evoi_gestion_util(ActionEvent event) {

        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherUser.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AfficherUserController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_gestion_util.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void envoi_SoinMP(ActionEvent event) {
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AfficherSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_envoi_SoinMP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_catSoinMP(ActionEvent event) {

        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherCategorieSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AfficherCategorieSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_envoi_catSoinMP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void envoi_cat_Stat(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("StatCatSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            StatCatSoinMPController dpc = loader.getController();

            cat_Stat.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_statSoin(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("StatSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            StatSoinMPController dpc = loader.getController();

            stat_soin.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void sedeconnecter(ActionEvent event) {
         Session.getSession().clearSession();
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_deconnexion.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AjouterCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @FXML
    private void gestionTypeAction(ActionEvent event) {
         try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionTypeReclamationBack.fxml"));
            
            Parent root = loader.load();
            rec.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    
        
    
}
