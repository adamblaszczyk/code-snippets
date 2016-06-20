/*
 *  g++ fibonacci.cpp -o fibonacci
 *
 *  Fibonacci numbers: F(n) = F(n-1) + F(n-2) with F(0) = 0 and F(1) = 1 
 *  https://oeis.org/A000045
 *
 */
 
#include <iostream>  //std::cout, std::cin
#include <iomanip>   //std::setprecision

using namespace std;

long long n, f, previous;
double phi;
 
int main() {

  cout << endl << "FIBONACCI NUMBERS" << endl;
  cout << endl << "F(n) = F(n-1) + F(n-2) with F(0) = 0 and F(1) = 1" << endl << endl;
  cout << "n (0..92) = ";
  cin  >> n;
  cout << endl;

  f = 1; previous = 1;
  
  cout.setf(ios::showpoint);

  for(int i = 0; i <= n; i++) {
    if(i == 0){
      f = 0;
      cout << "F[" << i << "] = " << f << endl;
    }
    if(i == 1){ 
      f = 1;
      cout << "F[" << i << "] = " << f << endl;
    }
    if(i ==2){ 
      f = 1;
      phi = 1;
      cout << setprecision(10) << "F[" << i << "] = " << f << "   phi = " << phi << endl;
    }    
    if(i > 2) {
      f = f + previous;
      previous = f - previous;
      phi = (double) f / previous;
      cout << setprecision(10) << "F[" << i << "] = " << f << "   phi = " << phi << endl;
    }
  }

  return 0;
}
