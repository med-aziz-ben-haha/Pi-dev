
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.CategorieSoinMP;
import SahtiTN.entities.SoinMP;
import SahtiTN.services.CategorieSoinMPCrud;
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
public class AfficherCategorieSoinMPController implements Initializable {

    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private TableView<CategorieSoinMP> id_table;
    @FXML
    private TableColumn<?, ?> id;
    @FXML
    private Button btn_ajouterCatSoinMP;
    @FXML
    private Button btn_suppCatSoinMP;
    @FXML
    private TextField id_recherche;
    @FXML
    private Button btn_pdf;
    @FXML
    private Hyperlink btn_deconnexion;
        private ObservableList<CategorieSoinMP> data;
    @FXML
    private TableColumn<CategorieSoinMP, String> libelle_categorie_soin_mp;
    @FXML
    private TableColumn<CategorieSoinMP, String> lien_icone_csmp;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
            data = FXCollections.observableArrayList();

        CategorieSoinMPCrud Categories = new CategorieSoinMPCrud();

        Categories.afficherCategorieSoinMP().forEach((a) -> {

            data.add(a);

        });
        id.setCellValueFactory(new PropertyValueFactory<>("id"));
        libelle_categorie_soin_mp.setCellValueFactory(new PropertyValueFactory<>("libelle_categorie_soin_mp"));
        lien_icone_csmp.setCellValueFactory(new PropertyValueFactory<>("lien_icone_csmp"));
        
        id_table.setEditable(true);
        libelle_categorie_soin_mp.setCellFactory(TextFieldTableCell.forTableColumn());

        id_table.setItems(null);
        id_table.setItems(data);
        //titre.setCellFactory(TextFieldTableCell.forTableColumn());
        //icone.setCellFactory(TextFieldTableCell.forTableColumn());
        // TODO
        FilteredList<CategorieSoinMP> filteredData = new FilteredList<>(data, b -> true);

        // 2. Set the filter Predicate whenever the filter changes.
        id_recherche.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate(alo -> {
                // If filter text is empty, display all persons.

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }

                // Compare first name and last name of every person with filter text.
                String lowerCaseFilter = newValue.toLowerCase();

                if (alo.getLibelle_categorie_soin_mp().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches first name.
                
                } else {
                    return false; // Does not match.
                }
            });
        });

        // 3. Wrap the FilteredList in a SortedList. 
        SortedList<CategorieSoinMP> sortedData = new SortedList<>(filteredData);

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
    private void navigation_ajout(ActionEvent event) {
        
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AjouterCategorieSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AjouterCategorieSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_ajouterCatSoinMP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @FXML
    private void supprimerCategorieSoinMP(ActionEvent event) {
           CategorieSoinMP CategorieSoinMPtab = id_table.getSelectionModel().getSelectedItem();
//        Action ad = Dialogs.create()
//                .title("TESt")
//                .actions(Dialog.ACTION_OK , Dialog.ACTION_NO)
//                .message("test")
//                .styleClass(Dialog.STYLE_CLASS_NATIVE)
//                .showConfirm();
        if (CategorieSoinMPtab != null) {
            Alert alert = new Alert(AlertType.CONFIRMATION);
            //alert.setTitle("Confirmation Dialog");
            //alert.setHeaderText("Look, a Confirmation Dialog");
            alert.setContentText("Voulez vous vraiment supprimer cette CategorieAide  ?");

            Optional<ButtonType> result = alert.showAndWait();
            if (result.get() == ButtonType.OK) {

                CategorieSoinMPCrud crud = new CategorieSoinMPCrud();
                CategorieSoinMP c = new CategorieSoinMP();
                c.setId(CategorieSoinMPtab.getId());

                crud.deleteCategorieSoinMP(c);
            }
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherCategorieSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            try {
                root = loader.load();
                //récupération du controller lier au fichier fxml 
                AfficherCategorieSoinMPController dpc = loader.getController();
                //             dpc.setLbMessage(id_act.getText());

                btn_suppCatSoinMP.getScene().setRoot(root);

            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            pdf.listCategorieSoinMP();
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
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
    

    @FXML
    private void editTitre(TableColumn.CellEditEvent<CategorieSoinMP, String> event) {
          CategorieSoinMPCrud c = new CategorieSoinMPCrud();
        event.getRowValue().setLibelle_categorie_soin_mp(event.getNewValue());
        c.modifierCategorieSoinMP(event.getRowValue());
    }

    @FXML
    private void editIcone(TableColumn.CellEditEvent<CategorieSoinMP, String> event) {
        CategorieSoinMPCrud c = new CategorieSoinMPCrud();
        event.getRowValue().setLien_icone_csmp(event.getNewValue());
        c.modifierCategorieSoinMP(event.getRowValue());
    }
    
}
