
package entity;

import java.util.Scanner;

public class Categorie implements ICategorie{
    
    private int idC;
    private String libC;

    public int getIdC() {
        return idC;
    }

    public String getLibC() {
        return libC;
    }

    public void setLibC(String libC) {
        this.libC = libC;
    }

    @Override
    public void saisi() {
        Scanner clavier = new Scanner(System.in);
        System.out.print("Saisir le libelle : ");
        String tampon = clavier.nextLine();
        this.setLibC(tampon);
    }

    @Override
    public void afficher() {
        System.out.println("----------Affichage-------");
        System.out.println("Reference : "+this.getIdC());
        System.out.println("Libellé : "+this.getLibC());
    }

    
}
