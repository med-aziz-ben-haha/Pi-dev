/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.SoinMP;
import SahtiTN.services.SoinMPCrud;
import SahtiTN.tools.PDFutil;
import com.lowagie.text.DocumentException;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
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
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class AfficherSoinMPController implements Initializable {

    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private TableView<SoinMP> id_table;
    @FXML
    private TableColumn<?, ?> id;
    @FXML
    private TableColumn<?, ?> categorie_soin_mp_id;
    @FXML
    private TableColumn<SoinMP, String> titre_soin_mp;
    @FXML
    private TableColumn<SoinMP, String> description_soin_mp;
    @FXML
    private TableColumn<SoinMP, String> lien_image_smp;
    @FXML
    private TableColumn<SoinMP, String> adresse_soin_mp;
    @FXML
    private Button btn_ajouterSoinMP;
    @FXML
    private Button btn_suppSoinMP;
    @FXML
    private TextField id_recherche;
    @FXML
    private Button btn_pdf;
    @FXML
    private Hyperlink btn_deconnexion;
    
    private ObservableList<SoinMP> data;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
            data = FXCollections.observableArrayList();

        SoinMPCrud soins = new SoinMPCrud();

        soins.afficherSoinMP().forEach((a) -> {

            data.add(a);

        });
        id.setCellValueFactory(new PropertyValueFactory<>("id"));
        titre_soin_mp.setCellValueFactory(new PropertyValueFactory<>("titre_soin_mp"));
        
        categorie_soin_mp_id.setCellValueFactory(new PropertyValueFactory<>("categorie_soin_mp_id"));
        description_soin_mp.setCellValueFactory(new PropertyValueFactory<>("description_soin_mp"));
        lien_image_smp.setCellValueFactory(new PropertyValueFactory<>("lien_image_smp"));
        adresse_soin_mp.setCellValueFactory(new PropertyValueFactory<>("adresse_soin_mp"));
        
        id_table.setEditable(true);
        titre_soin_mp.setCellFactory(TextFieldTableCell.forTableColumn());
        description_soin_mp.setCellFactory(TextFieldTableCell.forTableColumn());
        lien_image_smp.setCellFactory(TextFieldTableCell.forTableColumn());
        adresse_soin_mp.setCellFactory(TextFieldTableCell.forTableColumn());

        id_table.setItems(null);
        id_table.setItems(data);
        //titre.setCellFactory(TextFieldTableCell.forTableColumn());
        //icone.setCellFactory(TextFieldTableCell.forTableColumn());
        // TODO
        FilteredList<SoinMP> filteredData = new FilteredList<>(data, b -> true);

        // 2. Set the filter Predicate whenever the filter changes.
        id_recherche.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate(alo -> {
                // If filter text is empty, display all persons.

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }

                // Compare first name and last name of every person with filter text.
                String lowerCaseFilter = newValue.toLowerCase();

                if (alo.getTitre_soin_mp().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches first name.
                } else if (alo.getDescription_soin_mp().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches first name.
                } else if (alo.getLien_image_smp().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches first name.
                } else if (alo.getAdresse_soin_mp().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches first name.
                } else {
                    return false; // Does not match.
                }
            });
        });

        // 3. Wrap the FilteredList in a SortedList. 
        SortedList<SoinMP> sortedData = new SortedList<>(filteredData);

        // 4. Bind the SortedList comparator to the TableView comparator.
        // 	  Otherwise, sorting the TableView would have no effect.
        sortedData.comparatorProperty().bind(id_table.comparatorProperty());

        // 5. Add sorted (and filtered) data to the table.
        id_table.setItems(sortedData);
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
            Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
    private void editTitre(TableColumn.CellEditEvent<SoinMP, String> event) {
        SoinMPCrud s = new SoinMPCrud();
        event.getRowValue().setTitre_soin_mp(event.getNewValue());
        s.modifierSoinMP(event.getRowValue());
    }

    @FXML
    private void editDescription(TableColumn.CellEditEvent<SoinMP, String> event) {
        SoinMPCrud s = new SoinMPCrud();
        event.getRowValue().setDescription_soin_mp(event.getNewValue());
        s.modifierSoinMP(event.getRowValue());
    }

    @FXML
    private void editImage(TableColumn.CellEditEvent<SoinMP, String> event) {
        SoinMPCrud s = new SoinMPCrud();
        event.getRowValue().setLien_image_smp(event.getNewValue());
        s.modifierSoinMP(event.getRowValue());
    }

    @FXML
    private void editAdresse(TableColumn.CellEditEvent<SoinMP, String> event) {
        SoinMPCrud s = new SoinMPCrud();
        event.getRowValue().setAdresse_soin_mp(event.getNewValue());
        s.modifierSoinMP(event.getRowValue());
    }

    @FXML
    private void navigation_ajout(ActionEvent event) {
        
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AjouterSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AjouterSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_ajouterSoinMP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @FXML
    private void supprimerSoinMP(ActionEvent event) {
          SoinMP SoinMPtab = id_table.getSelectionModel().getSelectedItem();
//        Action ad = Dialogs.create()
//                .title("TESt")
//                .actions(Dialog.ACTION_OK , Dialog.ACTION_NO)
//                .message("test")
//                .styleClass(Dialog.STYLE_CLASS_NATIVE)
//                .showConfirm();
        if (SoinMPtab != null) {
            Alert alert = new Alert(AlertType.CONFIRMATION);
            //alert.setTitle("Confirmation Dialog");
            //alert.setHeaderText("Look, a Confirmation Dialog");
            alert.setContentText("Voulez vous vraiment supprimer ce soin  ?");

            Optional<ButtonType> result = alert.showAndWait();
            if (result.get() == ButtonType.OK) {

                SoinMPCrud crud = new SoinMPCrud();
                SoinMP s = new SoinMP();
                s.setId(SoinMPtab.getId());

                crud.supprimerSoinMP(s);
            }
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            try {
                root = loader.load();
                //récupération du controller lier au fichier fxml 
                AfficherSoinMPController dpc = loader.getController();
                //             dpc.setLbMessage(id_act.getText());

                btn_suppSoinMP.getScene().setRoot(root);

            } catch (IOException ex) {
                Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
            }

        } else {
            Alert alert = new Alert(AlertType.ERROR);
            alert.setTitle("Error Dialog");
            //alert.setHeaderText("Look, an Error Dialog");
            alert.setContentText("Vous devez selectionner un champs ");

            alert.showAndWait();

        }
            
    }

    @FXML
    private void GeneratePdf(ActionEvent event) throws SQLException, IOException {
        PDFutil pdf = new PDFutil();
       
        try {
            pdf.listSoinMP();
        } catch (FileNotFoundException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (DocumentException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    
    }
    
    
}
