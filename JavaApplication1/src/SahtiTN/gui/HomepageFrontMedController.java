/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.tools.Session;
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
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class HomepageFrontMedController implements Initializable {

    @FXML
    private Hyperlink btn_MP;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Label id_ID;
    @FXML
    private AnchorPane home;
    @FXML
    private Button gestionOrd;
    @FXML
    private Hyperlink btn_Med;
    @FXML
    private Hyperlink btn_Ord;
    @FXML
    private Hyperlink btn_reclmation;
    @FXML
    private Hyperlink btn_act;
    @FXML
    private Hyperlink LienProfil;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    @FXML
    private void envoiAccueil(ActionEvent event) {
        //récupération fichier fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontMed.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.HomepageFrontMedController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

   

    @FXML
    private void sedeconnecter(ActionEvent event) {
        Session.getSession().clearSession();
         FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_MP(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherCategorieSoinMPFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.AfficherCategorieSoinMPFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

   
    @FXML
    private void envoi_Med(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionMedicamentFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            GestionMedicamentFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_Ord(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionOrdonnanceFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            GestionOrdonnanceFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_gestion_Ord(ActionEvent event) {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionOrdonnanceBack.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            GestionOrdonnanceBackController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_reclamation(ActionEvent event) {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionReclamationFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            GestionReclamationFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_act(ActionEvent event) {
               FXMLLoader loader = new FXMLLoader(getClass().getResource("HomeFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
          

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    
    
    

    
    
}
