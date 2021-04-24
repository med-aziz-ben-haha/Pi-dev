/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sahti.entities;



/**
 *
 * @author allouch
 */
public class Services {
  
    private String nom_centre_medical;
    private String service ;
    private int id_services ;
    private int duree ;
    

    public String get_nom_centre_medical() {
        return nom_centre_medical;
    }

    public void set_nom_centre_medical(String nom_centre_medical) {
        this.nom_centre_medical =nom_centre_medical;
    }

    public string get_service() {
        return service;
    }

    public void set_service( String service) {
        this.service =service;
    }
    
     public int get_id_services() {
        return  id_services;
    }

    public void set_id_services(int id_services) {
        this.id_services = id_services;
    }

    public int get_duree() {
        return duree;
    }

    public void set_duree(int duree) {
        this.duree =duree;
    }


    public CentreMed(String nom_centre_medical, String services ,int id_services, int duree) {
        this.nom_centre_medical =nom_centre_medical;
        this.services =services;
        this.id_services =id_services;
        this.duree = duree;
    }
 

    @Override
    public String toString() {
        return "CentreMed{" +",nom_centre_medical=" + nom_centre_medical + ", services=" + services + ",id_services =" + id_services + ", duree=" + duree '}';
    }
    
}
