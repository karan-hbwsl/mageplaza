import java.util.*;

class B_Large_Array_and_Segments {
    static Scanner sc;

    public static void main(String[] args) {
        sc = new Scanner(System.in);
        int t = sc.nextInt();

        while (t-- > 0) {
            helper();
        }

        sc.close();
    }

    public static void helper() {
        int n = sc.nextInt();
        int k = sc.nextInt();
        long x = sc.nextLong();

        int[] arr = new int[n];
        long arr_sum = 0;

        for (int i = 0; i < n; i++) {
            arr[i] = sc.nextInt();
            arr_sum += arr[i];
        }

        long totalSum = arr_sum * k;

        if (totalSum < x) {
            System.out.println(0);
            return;
        } else if (totalSum == x) {
            System.out.println(1);
            return;
        }

        long contain = x / arr_sum;
        x = x % arr_sum;

        long[] prefixSum = new long[n];
        prefixSum[0] = arr[0];
        for (int i = 1; i < n; i++) {
            prefixSum[i] = arr[i] + prefixSum[i - 1];
        }

        int low = 0, high = n - 1;
        int res = -1;

        while (low <= high) {
            int mid = (low + high) / 2;
            if (prefixSum[mid] <= x) {
                res = mid;
                low = mid + 1;
            } else {
                high = mid - 1;
            }
        }

        if (res == -1) {
            System.out.println(n * k - contain * n);
        } else {
            System.out.println(n * k - (contain * n + res));
        }
    }
}
