/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Medicament;
import SahtiTN.entities.Ordonnance;
import SahtiTN.services.MedicamentService;
import SahtiTN.services.OrdonnanceService;
import SahtiTN.tools.MyConnection;
import SahtiTN.tools.Session;
import com.lowagie.text.pdf.PdfPCell;
import com.lowagie.text.pdf.PdfPTable;
import com.lowagie.text.pdf.PdfWriter;
import java.io.FileOutputStream;
import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.SelectionMode;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import com.lowagie.text.Document;
import com.lowagie.text.DocumentException;
import com.lowagie.text.Phrase;
import java.io.FileNotFoundException;
import java.sql.PreparedStatement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.control.ComboBox;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

/**
 * FXML Controller class
 *
 * @author Ennaifer Khalil
 */
public class GestionOrdonnanceBackController implements Initializable {

    @FXML
    private TextArea tf_contenu;
    @FXML
    private DatePicker tf_dateOrdonnance;
    @FXML
    private Button bt_ajouterOrdonnance;
    @FXML
    private Button bt_afficherOrdonnace;
    @FXML
    private TableView<Ordonnance> tab_ordonnance;
    @FXML
    private TableColumn<Ordonnance, Integer> id_ord_col;
    @FXML
    private TableColumn<Ordonnance, String> contenu_ord_col;
    @FXML
    private TableColumn<Ordonnance, LocalDate> date_ord_col;
    @FXML
    private TableColumn<Ordonnance, String> liste_med_col;
    @FXML
    private Button bt_supprimerOrdonnance;
    @FXML
    private Button bt_updateOrdonnance;
    @FXML
    private TextField tf_recherche2;
    @FXML
    private ListView<String> list_medicament;
    @FXML
    private Label id_ID;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private AnchorPane home;
    @FXML
    private Button bt_exportPDF2;
    @FXML
    private Button bt_exportExcel2;
    @FXML
    private Button bt_triOrdonnance;
    @FXML
    private Label Nom_Med;
    @FXML
    private ComboBox<String> Combo_nomP;
    private int idMed=Session.getSession().getSessionUser().getId();
   

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        afficherOrdonnance();
        afficherlisteMedicament();
        afficherlistePatient();
        
        OrdonnanceService Oc=new OrdonnanceService();
        Nom_Med.setText(Oc.DeterminerNomById(idMed));
        tf_dateOrdonnance.setValue(LocalDate.now());
        tf_dateOrdonnance.setEditable(false);
    }    

    
    private void afficherlisteMedicament(){
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<String> listeMedicament = Oc.afficherlisteMedicament();
        list_medicament.setItems(listeMedicament);
        list_medicament.getSelectionModel().setSelectionMode(SelectionMode.MULTIPLE);
    }
    
    private void afficherlistePatient(){
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<String> listeMedicament = Oc.afficherlistePatient();
        Combo_nomP.setItems(listeMedicament);
    }
    
    
    @FXML
    private void afficherOrdonnance(){
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<Ordonnance> ordonnances = Oc.afficherOrdonnanceBack(idMed);
        id_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,Integer>("id"));
        contenu_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("contenu"));
        date_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,LocalDate>("dateOrdonnance"));
        liste_med_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("liste_medicament"));
       
        tab_ordonnance.setItems(ordonnances);
    }
    
    
    
    @FXML
    private void ajouterOrdonnance(ActionEvent event) {
            // SAUVEGARDE DANS LA BASE
            OrdonnanceService Oc = new OrdonnanceService();
            Ordonnance o = new Ordonnance();
            String contenu = tf_contenu.getText();
            LocalDate date_ord = tf_dateOrdonnance.getValue();

            int idP=Oc.DeterminerIDByNom(Combo_nomP.getValue());
            int idM=idMed;

            if(Validatefields()){
                o.setContenu(contenu);        
                o.setDateOrdonnance(date_ord);
                o.setUser_id(idP);
                o.setMedecin_id(idM);
                Oc.ajouterOrdonnance(o);
                
                int Ordonnance_id = Oc.GetIdFrom_Ord(o.getContenu());
                ObservableList<String> listeMedicament= list_medicament.getSelectionModel().getSelectedItems();
                for (String m:listeMedicament)
                {
                Oc.InsertInto_Ord_Med(Ordonnance_id,Oc.GetIdFrom_Medicament(m));
                }
                
                afficherOrdonnance();
                tf_contenu.clear();
                tf_dateOrdonnance.setValue(LocalDate.now());
                tf_dateOrdonnance.setEditable(false);
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setTitle("Ajouter ordonnance");
                alert.setHeaderText(null);
                alert.setContentText("Ordonnance ajouté avec succés !");
                alert.showAndWait();
            }
    }
    
    private boolean Validatefields(){
         boolean verif=true; 
            if (tf_contenu.getText().isEmpty()){
               Alert alert = new Alert(AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir le contenu de l'ordonnance");
               alert.showAndWait();
               verif=false;
            }
            if (tf_dateOrdonnance.getEditor().getText().isEmpty()){
               Alert alert = new Alert(AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir la Date");
               alert.showAndWait();
               verif=false;
           }
           return verif;
       }


    @FXML
    private void supprimerOrdonnance(ActionEvent event) throws SQLException 
    {
      Ordonnance ordonnance = tab_ordonnance.getSelectionModel().getSelectedItem();
      if (ordonnance==null)
      {
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle("Supprimer ordonnance");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner une ordonnance");
        alert.showAndWait();
      }
      else
      {
        Alert alert = new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Supprimer Ordonnance");
        alert.setHeaderText(null);
        alert.setContentText("Voulez vous supprimer cet ordonnance ?");
        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == ButtonType.OK){
            OrdonnanceService Oc=new OrdonnanceService();
            Oc.supprimerOrdonnance(ordonnance.getId());
            afficherOrdonnance();
        } 
        else 
        {
            Alert alert2 = new Alert(AlertType.WARNING);
            alert2.setTitle("Supprimer ordonnance");
            alert2.setHeaderText(null);
            alert2.setContentText("La suppression a ete annulé");
            alert2.showAndWait();
        }
      }
    }


    @FXML
    private void updateWindow2(ActionEvent event) {
        Ordonnance ordonnance = tab_ordonnance.getSelectionModel().getSelectedItem();
        if (ordonnance==null){
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Mise a jour ordonnance");
            alert.setHeaderText(null);
            alert.setContentText("Veuillez sélectionner une ordonnance");
            alert.showAndWait();
        }
        else{
            try {
                FXMLLoader fxmlloader=new FXMLLoader(getClass().getResource("UpdateOrdonnance.fxml"));
                Parent root1= (Parent) fxmlloader.load();
            
                UpdateOrdonnanceController UC= fxmlloader.getController();
                UC.setTf_idOrd(ordonnance.getId());
                UC.setTf_update_contenu(ordonnance.getContenu());
                UC.setTf_update_dateOrdonnance(ordonnance.getDateOrdonnance());
            
                Stage stage = new Stage();
                stage.setTitle("UpdateOrdonnance");
                stage.setScene(new Scene(root1));
                stage.show();
                }
        catch (IOException e) {
            e.printStackTrace();
            }
        }
    }
    
    @FXML
    private void rechercheOrdonnance(KeyEvent event) {
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<Ordonnance> ordonnances = Oc.rechercheOrdonnanceBack(tf_recherche2.getText(),idMed);
        id_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,Integer>("id"));
        contenu_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("contenu"));
        date_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,LocalDate>("dateOrdonnance"));
        liste_med_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("liste_medicament"));
       
        tab_ordonnance.setItems(ordonnances);
    }

    @FXML
    private void envoiAccueil(ActionEvent event) {
         try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontMed.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            HomepageFrontMedController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }


    @FXML
    private void exportExcel2(ActionEvent event) {
        try{
        String query= "Select * From ordonnance";
        PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(query);
        ResultSet rs = pst.executeQuery();
       
        XSSFWorkbook  wb = new XSSFWorkbook();
        XSSFSheet sheet = wb.createSheet("Ordonnance details");
        XSSFRow header = sheet.createRow(0);
        header.createCell(0).setCellValue("contenu_ord");
        header.createCell(1).setCellValue("date_ord");
        
        
          int index =1;
          while(rs.next()) {
             XSSFRow row = sheet.createRow(index);
             row.createCell(0).setCellValue(rs.getString("contenu_ord"));
             row.createCell(1).setCellValue(rs.getDate("date_ord").toString());
             
             
             
             index++;
          }
          FileOutputStream fileOut = new FileOutputStream("OrdonnanceDetails.xlsx");
          wb.write(fileOut);
          fileOut.close();
         
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Votre document Excel a ete créé !");
        alert.showAndWait();
       
        rs.close();
        }
        catch (SQLException | FileNotFoundException ex){
            Logger.getLogger(GestionMedicamentBackController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(GestionMedicamentBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    @FXML
    private void exportPDF2(ActionEvent event) throws SQLException {
         try {
                Class.forName("com.mysql.jdbc.Driver");
                  Connection con=MyConnection.getInstance().getCnx();
                Statement stmt = con.createStatement();
                    /* Define the SQL query */
                    ResultSet query_set = stmt.executeQuery("SELECT * From ordonnance");
                    /* Step-2: Initialize PDF documents - logical objects */
                    Document my_pdf_report = new Document();
                    PdfWriter.getInstance(my_pdf_report, new FileOutputStream("OrdonnanceDetails.pdf"));
                    my_pdf_report.open();            
                    //we have four columns in our table
                    PdfPTable my_report_table = new PdfPTable(3);
                    //create a cell object
                    PdfPCell table_cell;
                       my_report_table.addCell("Ordonnance ID");
                       my_report_table.addCell("Contenu Ordonnance");
                       my_report_table.addCell("Date Ordonnance");
                      

                    while (query_set.next()) {  
                                    String id = query_set.getString("id");
                                    table_cell=new PdfPCell(new Phrase(id));
                                    my_report_table.addCell(table_cell);
  
                                    String Contenu=query_set.getString("contenu_ord");
                                    table_cell=new PdfPCell(new Phrase(Contenu));
                                    my_report_table.addCell(table_cell);
                                   
                                    String date=query_set.getDate("date_ord").toString();
                                    table_cell=new PdfPCell(new Phrase(date));
                                    my_report_table.addCell(table_cell);
                                    
                                    
                                    }
                    /* Attach report table to PDF */
                    my_pdf_report.add(my_report_table);                      
                    my_pdf_report.close();
                    /* Close all DB related objects */
                    query_set.close();
                    stmt.close();
                         

    } catch (FileNotFoundException e) {
    e.printStackTrace();
    } catch (DocumentException e) {
    e.printStackTrace();
    }catch (ClassNotFoundException ex) {
            Logger.getLogger(GestionOrdonnanceBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Ordonnance Details Exported To Pdf");
        alert.showAndWait();
   
    }

    @FXML
    private void ControlDatePicker(MouseEvent event) {
        if (!(tf_dateOrdonnance.isEditable())){
        Alert alert = new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Confirmation Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Voulez vous changer la date du systeme ?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == ButtonType.OK){
            tf_dateOrdonnance.setEditable(true);
       } else {
            tf_dateOrdonnance.setEditable(false);
       }    
    }   
    }

    @FXML
    private void bt_triOrdonnance(ActionEvent event) {
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<Ordonnance> ordonnances = Oc.triOrdonnance(idMed);
        id_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,Integer>("id"));
        contenu_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("contenu"));
        date_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,LocalDate>("dateOrdonnance"));
        liste_med_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("liste_medicament"));
       
        tab_ordonnance.setItems(ordonnances);
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

            tf_dateOrdonnance.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
