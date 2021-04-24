/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javafxapplication2;

import static com.sun.deploy.config.JREInfo.getAll;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.CheckBox;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.shape.Rectangle;
import sahti.entities.CentreMed;
import sahti.entities.Services;
import sahti.services.Crud_CentreMed;
import sahti.services.Crud_Services;


/**
 *
 * @author allouch
 */
public class FXMLDocumentController implements Initializable {
    
    @FXML
    private TableView<CentreMed> tableview;
    @FXML
    private TableColumn<CentreMed, int> id_services;
    @FXML
    private TableColumn<CentreMed, String> nom_centre_medical;
    @FXML
    private TableColumn<CentreMed, String> service;
    @FXML
    private TableColumn<CentreMed, int> duree;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Hyperlink btn_centremed;
    @FXML
    private AnchorPane home;
    @FXML
    private Button btnPdf;
 

    private void refresh()
    {
         showAll();
    type.getSelectionModel().clearSelection();
    tfdescription.clear();
    }*/
 
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
      refresh();
    }    
 
         
}


   
    private void showAll()
    {     tableview.getItems().clear();

        ObservableList<Services> list = (ObservableList<Services>) new Crud_Services().getAll();    
        id_services.setCellValueFactory(new PropertyValueFactory<CentreMed, int>("id_services"));
        nom_centre_medical.setCellValueFactory(new PropertyValueFactory<CentreMed, String>("nom_centre_medical"));
        service.setCellValueFactory(new PropertyValueFactory<CentreMed, String>("service"));
        duree.setCellValueFactory(new PropertyValueFactory<CentreMed, String>("duree"));


        tableview.setItems(list); 
    
    }
   
    @FXML
    private void envoiAccueil(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            HomepageFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoiCentreMed(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource(" Gestion_Services_Front.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            Gestion_Services_FrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(Gestion_Services_FrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    @FXML
    private void printPdf() {
      // TODO
    }
    
    
}