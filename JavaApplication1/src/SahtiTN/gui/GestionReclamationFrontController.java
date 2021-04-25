/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.BadWords;
import SahtiTN.entities.Reclamation;
import SahtiTN.entities.Type;
import SahtiTN.services.CrudReclamation;
import SahtiTN.services.CrudType;
import SahtiTN.tools.Session;
import java.awt.Rectangle;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.CheckBox;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.AnchorPane;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class GestionReclamationFrontController implements Initializable {

    @FXML
    private TextField tfdescription;

    @FXML
    private Button btnAddNew;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;

    @FXML
    private ListView<Reclamation> tableview;
    @FXML
    private ComboBox<String> type;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private AnchorPane home;
    @FXML
    private javafx.scene.shape.Rectangle rectangle_recaptcha;
    @FXML
    private CheckBox checkbox_recaptcha;
    @FXML
    private Label id_ID;
    @FXML
    private Hyperlink btn_reclamation;
    @FXML
    private Hyperlink btn_MP;
    @FXML
    private Hyperlink btn_Med;
    @FXML
    private Hyperlink btn_Ord;
    @FXML
    private Hyperlink btn_act;

    private void initComboBox() {
        type.getSelectionModel().clearSelection();
        ObservableList<String> listType = (ObservableList<String>) new CrudType().getAllNames();
        type.getItems().addAll(listType);

    }

    private void refresh() {
        showAll();
        type.getSelectionModel().clearSelection();
        tfdescription.clear();
    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        recupererReclamation();
        initComboBox();
        refresh();
    }

    @FXML
    private void btnAddNewOnAction(ActionEvent event) {
        if (!checkbox_recaptcha.isSelected()) {
            checkbox_recaptcha.setStyle("-fx-border-color:red");

        } else {
            checkbox_recaptcha.setStyle("-fx-border-color:transparent");

            BadWords.loadConfigs();
            {

                if (BadWords.filterText(tfdescription.getText())) {

                    Notifications notificationBuilder = Notifications.create()
                            .title("Alert").text("cette application n'autorise pas ces termes").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
                            .position(Pos.CENTER_LEFT)
                            .onAction(new EventHandler<ActionEvent>() {
                                public void handle(ActionEvent event) {
                                    System.out.println("clicked ON ");
                                }
                            });
                    notificationBuilder.darkStyle();
                    notificationBuilder.show();

                    Parent root;

                } else {
                    Reclamation p = new Reclamation();
                    CrudReclamation cr = new CrudReclamation();
                    String typerec = type.getSelectionModel().getSelectedItem();
                    CrudType ct = new CrudType();
                    int id = ct.GetIdFromNom(typerec);
                    p.setType_reclamation_id(id);
                    p.setUser_id(2);
                    p.setDescription_reclamation(tfdescription.getText());
                    new CrudReclamation().ajouter(p);

                    Notifications notificationBuilder = Notifications.create()
                            .title("Succes").text("Votre Reclamation est Envoyée").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
                            .position(Pos.CENTER_LEFT)
                            .onAction(new EventHandler<ActionEvent>() {
                                public void handle(ActionEvent event) {
                                    System.out.println("clicked ON ");
                                }
                            });
                    notificationBuilder.darkStyle();
                    notificationBuilder.show();
                    p.setDescription_reclamation(tfdescription.getText());

                    //SmsSender s= new SmsSender() ;
                    //    s.send(" votre reclamation est envoyé ", "b");
                }
            }

            refresh();
        }

    }

    @FXML
    private void btnUpdateOnAction(ActionEvent event) {
        Reclamation p = tableview.getSelectionModel().getSelectedItem();
        String typerec = type.getSelectionModel().getSelectedItem();
        CrudType ct = new CrudType();

        int id = ct.GetIdFromNom(typerec);
        p.setType_reclamation_id(id);
        p.setDescription_reclamation(tfdescription.getText());

        CrudReclamation crs = new CrudReclamation();
        crs.update(p);
        refresh();
    }

    @FXML
    private void btnDeleteOnAction(ActionEvent event) {

        if (!tableview.getSelectionModel().isEmpty()) {
            Alert alert = new Alert(AlertType.CONFIRMATION, "Etes vous sur de vouloir supprimer cette reclamation " + tableview.getSelectionModel().getSelectedItem().getDescription_reclamation() + " ?", ButtonType.YES, ButtonType.NO);
            alert.showAndWait();

            if (alert.getResult() == ButtonType.YES) {
                CrudReclamation crs = new CrudReclamation();
                crs.supprimer(tableview.getSelectionModel().getSelectedItem());

                refresh();
            }

        }
    }

    private void showAll() {
        tableview.getItems().clear();

        ObservableList<Reclamation> list = (ObservableList<Reclamation>) new CrudReclamation().getAll();

        tableview.setItems(list);

    }

    private void recupererReclamation() {

        tableview.setOnMouseClicked(e -> {
            Reclamation r = tableview.getSelectionModel().getSelectedItem();
            tfdescription.setText(r.getDescription_reclamation());
            CrudType ct = new CrudType();
            Type ty = ct.Gettype(r.getType_reclamation_id());
            type.getSelectionModel().select(ty.getType_reclamation());
        });

    }

    @FXML
    private void comboboxtype(ActionEvent event) {
    }

    @FXML
    private void envoiAccueil(ActionEvent event) {
             int role = Session.getSession().getSessionUser().getRole();
        if (role == 1) {
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
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
        if (role == 2) {
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontMed.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;

                root = loader.load();
                //récupération du controller lier au fichier fxml 
                HomepageFrontMedController dpc = loader.getController();

                btn_accueil.getScene().setRoot(root);
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
        if (role == 3) {
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontPhar.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;

                root = loader.load();
                //récupération du controller lier au fichier fxml 
                HomepageFrontPharController dpc = loader.getController();

                btn_accueil.getScene().setRoot(root);
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
        if (role == 4) {
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontPara.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;

                root = loader.load();
                //récupération du controller lier au fichier fxml 
                HomepageFrontParaController dpc = loader.getController();

                btn_accueil.getScene().setRoot(root);
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    /* private boolean controleDeSaisie() {  

        if (type.getSelectionModel().getSelectedItem().isEmpty() ||  tfdescription.getText().isEmpty()) 
        {
             Alert alert = new Alert(AlertType.ERROR, "Données erronés Verifier les données Veuillez bien remplir tous les champs ! " , ButtonType.CLOSE);
alert.showAndWait();
         
            return false;
        } else 
   
            if (!Pattern.matches("[A-z]*", tfdescription.getText())) 
            {
              Alert alert = new Alert (AlertType.ERROR, "Données Verifier les données Vérifiez la description!");
                tfdescription.requestFocus();
                tfdescription.selectEnd();
                return false;
            }
           
           
        
        return true;
    }*/

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
