/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class AfficherSoinMPDetailsNoteController implements Initializable {
 private static String soinId;
    @FXML
    private Hyperlink btn_MP;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Label id_ID;
    @FXML
    private AnchorPane home;
    public String getsoinId() {
        return soinId;
    }
  
    public static void sesoinId(String soinId) {
        AfficherSoinMPDetailsNoteController.soinId = soinId;
    }
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

 @FXML
    private void envoiAccueil(ActionEvent event) {
     
     try {
         //récupération fichier fxml
         FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFront.fxml"));
         //récupération du root  à partir du fichier fxml
         Parent root;
         
         
         root = loader.load();
         //récupération du controller lier au fichier fxml
         SahtiTN.gui.HomepageFrontController dpc = loader.getController();
         
         btn_accueil.getScene().setRoot(root);
     } catch (IOException ex) {
         Logger.getLogger(AfficherSoinMPDetailsNoteController.class.getName()).log(Level.SEVERE, null, ex);
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
         
         btn_accueil.getScene().setRoot(root);
     } catch (IOException ex) {
         Logger.getLogger(AfficherSoinMPDetailsNoteController.class.getName()).log(Level.SEVERE, null, ex);
     }
       
       
    }

    @FXML
    private void envoi_MP(ActionEvent event) {
        
     try {
         FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherCategorieSoinMPFront.fxml"));
         //récupération du root  à partir du fichier fxml
         Parent root;
         
         
         root = loader.load();
         //récupération du controller lier au fichier fxml
         SahtiTN.gui.AfficherCategorieSoinMPFrontController dpc = loader.getController();
         
         btn_accueil.getScene().setRoot(root);
     } catch (IOException ex) {
         Logger.getLogger(AfficherSoinMPDetailsNoteController.class.getName()).log(Level.SEVERE, null, ex);
     }
       
      
    }
    
}
