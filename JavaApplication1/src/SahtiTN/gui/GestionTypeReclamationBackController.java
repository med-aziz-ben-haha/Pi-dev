/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Type;
import SahtiTN.services.CrudType;
import SahtiTN.tools.Session;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;

/**
 * FXML Controller class
 *
 * @author eya
 */
public class GestionTypeReclamationBackController implements Initializable {

    private TextField tfidT;
    @FXML
    private TextField tftype;
    @FXML
    private Button btnAddNew;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private ListView<Type> tableview;

    @FXML
    private Button btnTrier;
    @FXML
    private TextField rechAvan;
    @FXML
    private Label id_ID;
    @FXML
    private Hyperlink rec;
    @FXML
    private Hyperlink gestion;
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
    @FXML
    private Hyperlink btnaccueil;
    @FXML
    private Hyperlink gestioncat;
    @FXML
    private Hyperlink btntags;

    /**
     * Initializes the controller class.
     *
     * @param url
     * @param rb
     */
    public void refresh() {
        tftype.clear();
        ShowAllType();
    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        recupererType();
        refresh();
    }

    @FXML
    private void btnAddNewOnAction(ActionEvent event) {
        Type p = new Type();
        p.setType_reclamation(tftype.getText());
        new CrudType().ajouter(p);
        refresh();
        tftype.clear();
    }

    @FXML
    private void btnUpdateOnAction(ActionEvent event) {

        Type t = tableview.getSelectionModel().getSelectedItem();
        CrudType Type = new CrudType();
        Type.update(t.getId(), tftype.getText());
        tftype.clear();
        refresh();
    }

    @FXML
    private void btnDeleteOnAction(ActionEvent event) {

        if (!tableview.getSelectionModel().isEmpty()) {
            Alert alert = new Alert(AlertType.CONFIRMATION, "Etes vous sur de vouloir supprimer ce type " + tableview.getSelectionModel().getSelectedItem().getType_reclamation() + " ?", ButtonType.YES, ButtonType.NO);
            alert.showAndWait();

            if (alert.getResult() == ButtonType.YES) {
                CrudType cp = new CrudType();
                cp.supprimer(tableview.getSelectionModel().getSelectedItem());

                refresh();
            }

        }

    }

    private void ShowAllType() {

        tableview.getItems().clear();
        ObservableList<Type> list = (ObservableList<Type>) new CrudType().getAll();

        tableview.setItems(list);

    }

    private void recupererType() {

        tableview.setOnMouseClicked(e -> {
            Type s = tableview.getSelectionModel().getSelectedItem();
            tftype.setText(s.getType_reclamation());

        });

    }

    /*  @FXML
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
        
    }*/

    @FXML
    private void btnTrierOnAction(ActionEvent event) {
        tableview.getItems().clear();
        ObservableList<Type> list = (ObservableList<Type>) new CrudType().getAllTrier();

        tableview.setItems(list);
    }

    @FXML
    private void rechAvanOnAction(KeyEvent event) {

        tableview.getItems().clear();
        ObservableList<Type> list = (ObservableList<Type>) new CrudType().Recher(rechAvan.getText());

        tableview.setItems(list);

    }

    @FXML
    private void recOnAction(ActionEvent event) {

        FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionReclamationBack.fxml"));
        try {
            Parent root = loader.load();
            GestionReclamationBackController apc = loader.getController();
            tableview.getScene().setRoot(root);
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

    @FXML
    private void handleClicks(ActionEvent event) throws IOException {
         if (event.getSource() == gestioncat) {
           

            FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/GestionCatego.fxml"));
            Parent root = loader.load();
             rec.getScene().setRoot(root);
        
        }

        if (event.getSource() == btntags) {

            FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/Gestiontags.fxml"));
            Parent root = loader.load();
             rec.getScene().setRoot(root);

        }
                 if (event.getSource() == btnaccueil) {
          

            FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/Home.fxml"));
            Parent root = loader.load();
             rec.getScene().setRoot(root);

        }
    }

}
