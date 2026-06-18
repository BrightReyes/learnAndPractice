import java.util.ArrayList;

public class day2Practice {

    public static void main(String[] args) {
        // Create a small inventory list. Add products, loop through them,
        // and create a function that prints low-stock items.

        ArrayList<String> products = new ArrayList<>();
        products.add("Mouse : 3");
        products.add("Keyboard : 5");
        products.add("Monitor : 2");
        products.add("USB Cable : 8");
        products.add("Headset : 10");

        System.out.println("Current Product List:");
        for (String product : products) {
            System.out.println(product);
        }

        System.out.println("\nChecking for low stock:");
        printLowStocks(products);

    }

    public static void printLowStocks(ArrayList<String> products) {
        for (String product : products) {
            // The product string looks like "Mouse : 3"
            // We split it by " : " to separate the name from the number
            String[] parts = product.split(" : ");
            String name = parts[0]; // "Mouse"
            String stockString = parts[1]; // "3"

            // Convert the string "3" into an actual integer number
            int stock = Integer.parseInt(stockString);

            // Now we can safely compare the integer to 5
            if (stock == 0) {
                 System.out.println("Out of stock: " + name);
            }
            else if (stock <= 5) {
                System.out.println("Low stock: " + name + " (Only " + stock + " left)");
            }
            else {
                System.out.println("Healthy stock: " + name + " (Only " + stock + " left)");
            }
        }
    }

}

// ========================================================
// OOP APPROACH EXAMPLE (For your reference and comparison)
// ========================================================

class OOPPractice {
    public static void runOOPExample() {
        System.out.println("\n--- OOP APPROACH BELOW ---");
        
        // 1. Create a list of REAL Product objects, not Strings!
        ArrayList<Product> oopProducts = new ArrayList<>();
        oopProducts.add(new Product("Mouse", 3));
        oopProducts.add(new Product("Keyboard", 5));
        oopProducts.add(new Product("Monitor", 2));
        oopProducts.add(new Product("USB Cable", 8));
        oopProducts.add(new Product("Headset", 10));

        System.out.println("Checking for low stock (OOP way):");
        printLowStocksOOP(oopProducts);
    }

    // --- OOP APPROACH METHOD ---
    public static void printLowStocksOOP(ArrayList<Product> products) {
        for (Product product : products) {
            
            // Notice how clean this is! No splitting strings. No parseInt.
            // We just ask the object for its stock and its name directly.
            
            if (product.stock == 0) {
                 System.out.println("Out of stock: " + product.name);
            }
            else if (product.stock <= 5) {
                System.out.println("Low stock: " + product.name + " (Only " + product.stock + " left)");
            }
            else {
                System.out.println("Healthy stock: " + product.name + " (Only " + product.stock + " left)");
            }
        }
    }
}

// --- OOP CLASS BLUEPRINT ---
// This is the blueprint for what a "Product" is.
class Product {
    String name;
    int stock;

    // This is the constructor (how we create a new Product)
    public Product(String name, int stock) {
        this.name = name;
        this.stock = stock;
    }
}
