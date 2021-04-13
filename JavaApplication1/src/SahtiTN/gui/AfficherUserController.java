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
import java.util.Optional;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;










/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class AfficherUserController implements Initializable {

    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private TableView<User> id_tableUser;
  
    @FXML
    private TableColumn<?, ?> nom;
    @FXML
    private TableColumn<?, ?> prenom;
    @FXML
    private TableColumn<?, ?> email;
    @FXML
    private TableColumn<?, ?> sexe;
    @FXML
    private TableColumn<?, ?> telephone;
    @FXML
    private TableColumn<?, ?> adresse;
    @FXML
    private Button btn2;
    @FXML
    private TextField id_recherche;
    private ObservableList<User> data;
    @FXML
    private TableColumn<?, ?> login;
    @FXML
    private Hyperlink btn_deconnexion;
    @FXML
    private TableColumn<?, ?> id;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    
    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
         data = FXCollections.observableArrayList();

        UserCrud utilisateurs = new UserCrud();

        utilisateurs.afficherUser().forEach((u) -> {

            data.add(u);

        });
        id.setCellValueFactory(new PropertyValueFactory<>("id"));
         login.setCellValueFactory(new PropertyValueFactory<>("login"));
        nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
         email.setCellValueFactory(new PropertyValueFactory<>("email"));
        sexe.setCellValueFactory(new PropertyValueFactory<>("sexe"));
         telephone.setCellValueFactory(new PropertyValueFactory<>("telephone"));
        adresse.setCellValueFactory(new PropertyValueFactory<>("adresse_user"));
      
        
        
        id_tableUser.setItems(null);
        id_tableUser.setItems(data);

        // TODO
        FilteredList<User> filteredData = new FilteredList<>(data, b -> true);

        // 2. Set the filter Predicate whenever the filter changes.
        id_recherche.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate(alo -> {
                // If filter text is empty, display all persons.

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }

                // Compare first name and last name of every person with filter text.
                String lowerCaseFilter = newValue.toLowerCase();

                if (alo.getEmail().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches first name.
                } else if (alo.getLogin().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches first name.
                 } else {
                    return false; // Does not match.
                }
            });
        });

        // 3. Wrap the FilteredList in a SortedList. 
        SortedList<User> sortedData = new SortedList<>(filteredData);

        // 4. Bind the SortedList comparator to the TableView comparator.
        // 	  Otherwise, sorting the TableView would have no effect.
        sortedData.comparatorProperty().bind(id_tableUser.comparatorProperty());

        // 5. Add sorted (and filtered) data to the table.
        id_tableUser.setItems(sortedData);
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
    private void SupprimerUser(ActionEvent event) {
           User usertab = id_tableUser.getSelectionModel().getSelectedItem();
//        Action ad = Dialogs.create()
//                .title("TESt")
//                .actions(Dialog.ACTION_OK , Dialog.ACTION_NO)
//                .message("test")
//                .styleClass(Dialog.STYLE_CLASS_NATIVE)
//                .showConfirm();
        if (usertab != null) {
            Alert alert = new Alert(AlertType.CONFIRMATION);
            //alert.setTitle("Confirmation Dialog");
            //alert.setHeaderText("Look, a Confirmation Dialog");
            alert.setContentText("Voulez vous vraiment supprimer cet utilisateur  ?");

            Optional<ButtonType> result = alert.showAndWait();
            if (result.get() == ButtonType.OK) {

                UserCrud crud = new UserCrud();
                 User u = new User();
                u.setId(usertab.getId());

                crud.deleteUser(u);
              }
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherUser.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;
                try {
                    root = loader.load();
                    //récupération du controller lier au fichier fxml 
                    AfficherUserController dpc = loader.getController();
                    //             dpc.setLbMessage(id_act.getText());

                    btn2.getScene().setRoot(root);

                } catch (IOException ex) {
                    Logger.getLogger(AfficherUserController.class.getName()).log(Level.SEVERE, null, ex);
                }

            } else {
             Alert alert = new Alert(AlertType.ERROR);
                alert.setTitle("Error Dialog");
                //alert.setHeaderText("Look, an Error Dialog");
                alert.setContentText("Vous devez selectionner un utilisateur! ");

                alert.showAndWait();
            
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
    
}
