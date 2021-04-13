/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.SoinMP;
import SahtiTN.services.SoinMPCrud;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class AjouterSoinMPController implements Initializable {

    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private TextField titre;
    @FXML
    private Button btn_ajoutSoinMP;
    @FXML
    private Button btn_retour;
    @FXML
    private TextField Adresse;
    @FXML
    private TextField Description;
    @FXML
    private ComboBox<String> Categorie_soin;
    ObservableList<String> catSoin = FXCollections.observableArrayList();
    @FXML
    private Hyperlink btn_deconnexion;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        SoinMPCrud Soins = new SoinMPCrud();
        catSoin.addAll(Soins.cherchercattitres());
        Categorie_soin.setItems(catSoin);
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
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
     
        
    }

    @FXML
    private void ajout_SoinMP(ActionEvent event) {
          
        try {
            SoinMPCrud Soins = new SoinMPCrud();
            String ch = Categorie_soin.getValue().toString();
           
            int id=Soins.chercherCatSoinMPid(ch);
            
            SoinMP s = new SoinMP( id ,titre.getText(),Description.getText(), null,Adresse.getText());
            //      Logger.getLogger(StartPageController.class.getName()).log(Level.SEVERE, null, ex);
            Soins.ajouterSoinMP(s);
            
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            AfficherSoinMPController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            btn_ajoutSoinMP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
       
    }

    @FXML
    private void navigation_affich(ActionEvent event) {
        
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
        try {
            root = loader.load();
      
            //récupération du controller lier au fichier fxml 
            AfficherSoinMPController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            btn_retour.getScene().setRoot(root);
              } catch (IOException ex) {
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void sedeconnecter(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_deconnexion.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
      
    
    }
    
}
