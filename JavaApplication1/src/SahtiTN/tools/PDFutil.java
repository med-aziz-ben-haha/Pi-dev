/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.tools;

import java.sql.Connection;
import com.lowagie.text.Document;
import com.lowagie.text.DocumentException;
import com.lowagie.text.Element;
import com.lowagie.text.FontFactory;
import com.lowagie.text.Image;
import com.lowagie.text.Paragraph;
import com.lowagie.text.Phrase;
import com.lowagie.text.html.WebColors;
import com.lowagie.text.pdf.PdfPCell;
import com.lowagie.text.pdf.PdfPTable;
import com.lowagie.text.pdf.PdfWriter;
import SahtiTN.entities.CategorieSoinMP;
import SahtiTN.entities.SoinMP;
import com.lowagie.text.pdf.PdfCell;

import java.awt.Color;
import java.awt.Desktop;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Time;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import javafx.scene.control.Cell;
import static javax.swing.Spring.width;

/**
 *
 * @author LENOVO
 */
public class PDFutil {
     Connection cn2;
    Statement ste;

    public PDFutil() {
        cn2 = MyConnection.getInstance().getCnx();
    }

    Document doc = new Document();

   

    public void listCategorieSoinMP() throws SQLException, FileNotFoundException, DocumentException, IOException {
        ste = cn2.createStatement();
        ResultSet rs = ste.executeQuery("SELECT * from categorie_soin_mp");
        PdfWriter.getInstance(doc, new FileOutputStream("./CategoriesSoinMP.pdf"));

        doc.open();
        //Image image = Image.getInstance("C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\Logo.jpeg");

        //document.add(new Paragraph("test\n  test")); 
        //doc.add(image);
        doc.add(new Paragraph("   "));
        doc.add(new Paragraph("  Liste CategorieSoinMP  "));
        doc.add(new Paragraph("   "));

        PdfPTable table = new PdfPTable(2);
        table.setWidthPercentage(100);
        PdfPCell cell;

        cell = new PdfPCell(new Phrase("Titre", FontFactory.getFont("Comic Sans MS", 15)));
        cell.setHorizontalAlignment(Element.ALIGN_CENTER);

        table.addCell(cell);

        cell = new PdfPCell(new Phrase("Image", FontFactory.getFont("Comic Sans MS", 15)));
        cell.setHorizontalAlignment(Element.ALIGN_CENTER);

        table.addCell(cell);

        while (rs.next()) {

            CategorieSoinMP c = new CategorieSoinMP();

            c.setLibelle_categorie_soin_mp(rs.getString(2));
            c.setLien_icone_csmp(rs.getString(3));

            cell = new PdfPCell(new Phrase(c.getLibelle_categorie_soin_mp(), FontFactory.getFont("Comic Sans MS", 12)));
            cell.setHorizontalAlignment(Element.ALIGN_CENTER);

            table.addCell(cell);
            Image image1 = Image.getInstance("C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + c.getLien_icone_csmp());
            PdfPCell cell1 = new PdfPCell(image1, true);

            table.addCell(cell1);

        }

        doc.add(table);
        doc.close();
        Desktop.getDesktop().open(new File("./CategoriesSoinMP.pdf"));
    }
      public void listSoinMP() throws SQLException, FileNotFoundException, DocumentException, IOException {
        ste = cn2.createStatement();
        ResultSet rs = ste.executeQuery("SELECT * from soin_mp");
        PdfWriter.getInstance(doc, new FileOutputStream("./SoinMP.pdf"));

        doc.open();
        //Image image = Image.getInstance("C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\Logo.jpeg");
        
        //document.add(new Paragraph("test\n  test")); 
        //doc.add(image);
        doc.add(new Paragraph("   "));
        doc.add(new Paragraph("  Liste SoinMP  "));
        doc.add(new Paragraph("   "));

        PdfPTable table = new PdfPTable(4);
        table.setWidthPercentage(100);
        PdfPCell cell;
        
        cell = new PdfPCell(new Phrase("Titre", FontFactory.getFont("Comic Sans MS", 15)));
        cell.setHorizontalAlignment(Element.ALIGN_CENTER);
        table.addCell(cell);

        cell = new PdfPCell(new Phrase("Description", FontFactory.getFont("Comic Sans MS", 15)));
        cell.setHorizontalAlignment(Element.ALIGN_CENTER);
        table.addCell(cell);

        cell = new PdfPCell(new Phrase("Image", FontFactory.getFont("Comic Sans MS", 15)));
        cell.setHorizontalAlignment(Element.ALIGN_CENTER);
        table.addCell(cell);
        
        
        cell = new PdfPCell(new Phrase("Adresse", FontFactory.getFont("Comic Sans MS", 15)));
        cell.setHorizontalAlignment(Element.ALIGN_CENTER);
        table.addCell(cell);
        

        while (rs.next()) {

            SoinMP s = new SoinMP();

            s.setTitre_soin_mp(rs.getString(3));
            s.setDescription_soin_mp(rs.getString(4));
            s.setAdresse_soin_mp(rs.getString(6));
            s.setLien_image_smp(rs.getString(5));
            
            cell = new PdfPCell(new Phrase(s.getTitre_soin_mp(), FontFactory.getFont("Comic Sans MS", 12)));
            cell.setHorizontalAlignment(Element.ALIGN_LEFT);
            table.addCell(cell);
            
            cell = new PdfPCell(new Phrase(s.getDescription_soin_mp(), FontFactory.getFont("Comic Sans MS", 12)));
            cell.setHorizontalAlignment(Element.ALIGN_LEFT);
            table.addCell(cell);
            
          
            Image image1 = Image.getInstance("C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + s.getLien_image_smp());
            PdfPCell cell1 = new PdfPCell(image1, true);
              table.addCell(cell1);
              
              cell = new PdfPCell(new Phrase(s.getAdresse_soin_mp(), FontFactory.getFont("Comic Sans MS", 12)));
            cell.setHorizontalAlignment(Element.ALIGN_LEFT);
            table.addCell(cell);
            

          

        }

        doc.add(table);
        doc.close();
        Desktop.getDesktop().open(new File("./SoinMP.pdf"));
    }
     
}
