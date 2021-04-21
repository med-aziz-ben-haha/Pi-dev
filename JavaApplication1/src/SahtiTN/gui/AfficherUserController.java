/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import SahtiTN.entities.User;
import SahtiTN.services.UserCrud;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ScrollPane;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;










/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class AfficherUserController implements Initializable {

    @FXML
    private Hyperlink btn_gestion_util;
 
  

    private Button btn2;
    @FXML
    private TextField id_recherche;
    private List<User> data;
    
    @FXML
    private Hyperlink btn_deconnexion;
 
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private ScrollPane scroll;
    @FXML
    private GridPane grid;
    
    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
         data = new ArrayList();

        UserCrud utilisateurs = new UserCrud();

        utilisateurs.afficherUser().forEach((u) -> {

            data.add(u);

        });
         int column=1;
        int row=0;
          
        for(int i=0; i<data.size();i++){
          
         
                
                try {
                    FXMLLoader fxmlLoader = new FXMLLoader();
                    
                    fxmlLoader.setLocation(getClass().getResource("TabUserBack.fxml"));
                    AnchorPane anchorPane=fxmlLoader.load();
                    TabUserBackController cardController= fxmlLoader.getController();
 
                    cardController.setUserData(data.get(i));
                    row++;
                    
                    
                    grid.add(anchorPane,column,row);
                    
                    GridPane.setMargin(anchorPane,new Insets(2));
                } catch (IOException ex) {
                    Logger.getLogger(AfficherUserController.class.getName()).log(Level.SEVERE, null, ex);
                }
              
             
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
            Logger.getLogger(AfficherUserController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AfficherUserController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AfficherUserController.class.getName()).log(Level.SEVERE, null, ex);
        }
      
        
    }

  

    @FXML
    private void sedeconnecter(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_deconnexion.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherUserController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void chercherUser(KeyEvent event) {
        grid.getChildren().clear();
        data = new ArrayList();

        UserCrud utilisateurs = new UserCrud();

        utilisateurs.rechercherUser(id_recherche.getText()).forEach((u) -> {

            data.add(u);

        });
         int column=1;
        int row=0;
          
        for(int i=0; i<data.size();i++){
          
         
                
                try {
                    FXMLLoader fxmlLoader = new FXMLLoader();
                    
                    fxmlLoader.setLocation(getClass().getResource("TabUserBack.fxml"));
                    AnchorPane anchorPane=fxmlLoader.load();
                    TabUserBackController cardController= fxmlLoader.getController();
 
                    cardController.setUserData(data.get(i));
                    row++;
                    
                    
                    grid.add(anchorPane,column,row);
                    
                    GridPane.setMargin(anchorPane,new Insets(2));
                } catch (IOException ex) {
                    Logger.getLogger(AfficherUserController.class.getName()).log(Level.SEVERE, null, ex);
                }
              
             
    } 
        
    }
    
}
