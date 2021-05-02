/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

/**
 *
 * @author eya
 */

public class Type {
     private int id ;
 
    private String type_reclamation;

    public Type(int id, String type_reclamation) {
        this.id = id;
        this.type_reclamation = type_reclamation;
    }

    public Type() {
        
      
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getType_reclamation() {
        return type_reclamation;
    }

    public void setType_reclamation(String type_reclamation) {
        this.type_reclamation = type_reclamation;
    }

    @Override
    public String toString() {
        return  type_reclamation ;
    }
    
}
