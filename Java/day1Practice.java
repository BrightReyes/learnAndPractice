import java.util.Scanner;
public class day1Practice {
    public static void main (String[] args){
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter product stock: ");
        double stock = scanner.nextDouble();

        System.out.print("Enter product price: ");
        double price = scanner.nextDouble();

        if (stock > 0 ){
            double totalValue = stock * price;
            System.out.println("Total value of the product in stock: " + totalValue);

        }
        else {
            System.out.println("Product is out of stock.");
        }


    }
}