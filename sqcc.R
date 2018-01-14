library(qcc)
#petrol products production
args <- commandArgs(TRUE)
num <-unlist(strsplit(args[1],","))
vec<-as.numeric(num)
data<-read.csv(file='petrol_products.csv',header=TRUE)
x<-data[1:7,4:11]
n<-length(x)
l<-2/(n+1)
png(filename="ewma.png", width=500, height=500)
k<-ewma(x, lambda=l, nsigmas=6,xlab='Year(2004-2012)',ylab='Petrol products production')
dev.off()
#summary(k)

#crude oil and natural gas production
d<-read.csv(file='crude_and_ng.csv',header=TRUE)
g<-as.integer(length(vec))
batch<-1:g
d1<-1:g
diameter<-1
xb <- 1
rg <- 1
dk<-c(d$X2000.01,d$X2002.03,d$X2003.04,d$X2004.05,d$X2005.06,d$X2006.07,d$X2007.08,d$X2008.09,d$X2009.10,d$X2010.11,d$X2011.12,d$X2012.13,d$X2013.14,d$X2014.15)
dd<-matrix(dk,nrow=12)
c1<-1
c2<-0
for(i in 1:g)
{
k<-as.integer(vec[i])
c2<-c2+k
if(k==1){
diameter<- c(diameter,dd[c1:c2,1:14])
xb <- c(xb,mean(dd[c1:c2,1:14]))
rg <- c(rg,max(dd[c1:c2,1:14])-min(dd[c1:c2,1:14]))
} else {
diameter<- c(diameter,colSums(dd[c1:c2,1:14]))
xb <- c(xb,mean(colSums(dd[c1:c2,1:14])))
rg <- c(rg,max(colSums(dd[c1:c2,1:14]))-min(colSums(dd[c1:c2,1:14])))
}
c1<-c2+1
}
diameter <- diameter[2:length(diameter)]
diameter <- matrix(diameter,nrow=g)
png(filename="xbar.png", width=500, height=500)
obj<-qcc(diameter,type="xbar",title="XBAR CHART",xlab="year(2000-15)",ylab="states")
dev.off()
#m<-readline(prompt="Press Enter")
png(filename="rchart.png", width=500, height=500)
obj1<-qcc(diameter,type="R",title="R CHART",xlab="year(2000-15)",ylab="states")
dev.off()
#m<-readline(prompt="Press Enter")
xb <- xb[2:length(xb)]
rg <- rg[2:length(rg)]
m_xb <- mean(xb)
m_r <- mean(rg)
UCL <- m_xb + (3 * m_r )/(g^.5)
LCL <- m_xb - (3 * m_r )/(g^.5)
#summary(obj)
#summary(obj1)