/* import java.util.Scanner;
class Complex1
{
    double real;
    double imag;

    void Complex1(double r,double i)
    {
        real=r;
        imag=i;
    }
    
     Complex1 add(Complex1 c)
     {
       return new Complex1(real+c.real,imag+c.imag);
     }

    public static void main(String args[])
    {
        Complex1 c1=new Complex1(2,3);
        Complex1 c2=new Complex1(1,2);

        Complex1 sum=c1.add(c2);
        System.out.printf("Sum=%.1f + %.1fi",sum.real,sum.imag);

    }

}*/
import java.util.Scanner;

class Complex1 {
    double real;
    double imag;

    // Constructor
    Complex1(double r, double i) {
        real = r;
        imag = i;
    }

    // Method to add two complex numbers
    Complex1 add(Complex1 c) {
        return new Complex1(real + c.real, imag + c.imag);
    }

    public static void main(String args[]) {
        Complex1 c1 = new Complex1(2.3, 3.4);
        Complex1 c2 = new Complex1(1.4, 2.3);

        Complex1 sum = c1.add(c2);
        System.out.printf("Sum = %.1f + %.1fi\n", sum.real, sum.imag);
    }
}
