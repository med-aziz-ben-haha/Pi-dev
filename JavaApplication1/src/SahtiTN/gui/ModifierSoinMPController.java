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
public class ModifierSoinMPController implements Initializable {
        public static int SoinId;

    public static int getSoinId() {
        return SoinId;
    }

    public static void setSoinId(int SoinId) {
        ModifierSoinMPController.SoinId = SoinId;
    }
    SoinMPCrud s = new SoinMPCrud();
    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private TextField titre;
    @FXML
    private Button btn_modifier;
    @FXML
    private Button btn_retour;
    @FXML
    private TextField Adresse;
    @FXML
    private TextField Description;
    @FXML
    private ComboBox<String> Categorie_soin;
    @FXML
    private Hyperlink btn_deconnexion;
  ObservableList<String> catSoin = FXCollections.observableArrayList();
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        SoinMPCrud Soins = new SoinMPCrud();
        catSoin.addAll(Soins.cherchercattitres());
        Categorie_soin.setItems(catSoin);
        // TODO
        SoinMP soin= new SoinMP();
        titre.setText(Soins.afficherAideDetailsFront(SoinId).getTitre_soin_mp());
        Adresse.setText(Soins.afficherAideDetailsFront(SoinId).getAdresse_soin_mp());
       Description.setText(Soins.afficherAideDetailsFront(SoinId).getDescription_soin_mp());
        Categorie_soin.getSelectionModel().select(Soins.cherchercattitre(Soins.afficherAideDetailsFront(SoinId).getCategorie_soin_mp_id()));
        
    
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
    
    @FXML
    private void btn_modifier(ActionEvent event) {
        try {
            String ch = Categorie_soin.getValue().toString();

            int id = s.chercherCatSoinMPid(ch);
            

            SoinMP soin = new SoinMP(SoinId, id, titre.getText(), Description.getText(), s.afficherAideDetailsFront(SoinId).getLien_image_smp(), Adresse.getText());
            s.modifierSoinMP(soin);

            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            AfficherSoinMPController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            btn_modifier.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(ModifierSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

}
