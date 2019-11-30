
#include<iostream>
#include<bits/stdc++.h>
using namespace std;
int main()
{
    int n,i,j,c=0;
    cin>>n;
    int arr[n];
    for(i=0;i<n;i++)
    {
        cin>>arr[i] ;
        
    }
    sort(arr,arr+n);
    
    for(i=1;i<n;i++)
    {
        for(j=i-1;j>=0;j--)
        {
            if(arr[i]>arr[j]&&arr[j]!=0)
            {
                arr[j]=0;
                break;
            }
        }
    }
    for(i=0;i<n;i++)
    {
        c+=arr[i];
    }
    cout<<c;
 
return 0;
    
}