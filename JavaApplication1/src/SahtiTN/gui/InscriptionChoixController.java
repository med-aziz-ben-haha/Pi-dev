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
import javafx.scene.control.Button;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class InscriptionChoixController implements Initializable {

    @FXML
    private Button inscription;
    @FXML
    private Button inscri_para;
    @FXML
    private Button inscri_phar;
    @FXML
    private Button inscri_med;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void envoi_inscri(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("Inscription.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            root = loader.load();
            //récupération du controller lier au fichier fxml
            InscriptionController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            inscription.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(InscriptionChoixController.class.getName()).log(Level.SEVERE, null, ex);
        }
           
    }

    @FXML
    private void envoi_inscri_para(ActionEvent event) {
           try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("InscriptionPara.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            root = loader.load();
            //récupération du controller lier au fichier fxml
            InscriptionParaController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            inscription.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(InscriptionChoixController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_inscri_phar(ActionEvent event) {
           try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("InscriptionPharmacien.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            root = loader.load();
            //récupération du controller lier au fichier fxml
            InscriptionPharmacienController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            inscription.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(InscriptionChoixController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_inscri_med(ActionEvent event) {
           try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("InscriptionMed.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            root = loader.load();
            //récupération du controller lier au fichier fxml
            InscriptionMedController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            inscription.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(InscriptionChoixController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
