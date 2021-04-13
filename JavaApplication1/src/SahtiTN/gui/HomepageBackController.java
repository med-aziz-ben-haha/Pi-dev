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
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class HomepageBackController implements Initializable {

    @FXML
    private Label id_ID;
    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Label btn_deconnexion;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void envoi_gestion_util(ActionEvent event) {
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
            Logger.getLogger(HomepageBackController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @FXML
    private void sedeconnecter(MouseEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_deconnexion.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
