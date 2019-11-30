import java.util.Scanner;
import java.util.*;
class Array {
    public static void main(String args[] ) throws Exception {
       Scanner sc=new Scanner(System.in);
       int t=sc.nextInt();
       for(int i=0;i<t;i++){
       int n=sc.nextInt();
       int k=sc.nextInt();
       int[] array=new int[n];
       for(int j=0;j<n;j++){
           array[j]=sc.nextInt();
       }
       Arrays.sort(array);
       if(k<=array[0])
       System.out.println(0);
       else
       System.out.println(Math.abs(k-array[0]));
}
    }
}