---
extends: _layouts.article
title: Knowing Your Audience Doesn't Have to be Compromising
description: Knowing your audience doesn't have to be compromising. A quick look into how Fathom Analytics is a simple, light-weight, privacy-first alternative to Google Analytics.
date: 2021-05-04
section: content
goal_code: K89WH2PL
twitter_image: https://www.jimmyaldape.dev/assets/images/twitter_blog.jpg
---

You've finished and deployed your website.  You've marketed and funneled users to your site.  Now you decide to gather some analytic data so that you can know your audience.  Naturally you decide to go with the goliath of analytics, Google, after all that's all you've heard about and know. However, you're at a crossroads.  Privacy matters to you but you need to know your audience. You also know Google's version is powerful but complicated. What do you do? Do you submit and compromise? No! Enter the david of our time, [Fathom Analytics](https://usefathom.com/), the simple, light-weight, privacy-first alternative to Google.

### What is Fathom Analytics?
Fathom Analytics is a simple, light-weight, privacy-first alternative to Google's version. It helps you collect the analytics you need to run your business without compromising or breaking the rules. It not only gives you what you need like your top content, top referrers and other useful data, but it does so without collecting personal information.  I repeat, it does not collect personal information. There are no annoying cookies and is compliant with GPDR, ePrivacy, PECR, CCPA, and COPPA.

### On the Move
Up until now, I've only used Google Analytics for paid work, but each time it was always setup.  The data I would receive honestly felt intrusive.  This conflicted with my notion of privacy. Privacy matters to me. Too many companies know too much about us. I knew there had to be a better way. 

As a software engineer, my first thought was to roll my own solution. As an experienced software engineer, I knew better.  Through my Twitter feed, I heard about Fathom Analytics. It sounded promising.  However, I wasn't ready to commit since my personal projects were not going to be developed any time soon. Still, I added [@jackellis](https://twitter.com/JackEllis) to my following list. Each tweet mentioning Fathom Analytics kept me intrigued.

It wasn't until Jack penned the blog post titled, "[Someone attacked our company](https://usefathom.com/blog/ddos-attack)"
that I decided it was time. It was obvious they had stepped on giant toes and proved that people/entities? were taking notice.
So I set my plan in motion, hoping I could become a customer sooner rather than later.

### Cost
Fathom Analytics is not free, but they do have a [7-day free trial](https://usefathom.com/ref/AKM9UL). The plans are based on usage and are as follows:

- $14/month - 100,000 page views
- $24/month - 200,000 page views
- $34/month - 400,000 page views
- $44/month - 800,000 page views
- $54/month - 1,000,000 page views
- $74/month - 2,000,000 page views
- Contact them for +2,000,000 page views


Even though it's a paid product, it allows for tracking of unlimited websites at any of the price points and if you happen to go over they state:

*" If you go over your page views, we will never suspend or close your account, or stop tracking your website. Instead, we look at a 2 month rolling average (where you greatly exceed your plan both months) and email you when we’re upgrading your plan, based on consistent overages, not just occasional traffic spikes.
No long-term contracts, cancel anytime. "*

Wow! It just keeps getting better.

### The Future is Here
Not to be out done, Jack and Paul, [announced](https://usefathom.com/v3) already that v3 update was just around the corner. To name a few, they will be bringing a new refreshed design, ability to filter content, IP and Country blocking, UTM parameters (think being able to filter campaigns), and so much more.

### Getting Started
Getting started is fairly easy.  You create a username and password, and provide credit card information.  Don't worry, it will not charge you.  The first 7 days are free. Once your account is created, you will be able to add your first site.   When you add your site, it will immediately give you the code you need to track your site.  It will also allow you to test that it can see your site right away. Luckily, I have my pipeline setup through Netlify and am able to make the changes, commit to my repository, and merge for deployment to production.  As soon as my site was live, I tested the site and was blown away that I could already see the data coming in!

### Data Collected
As you can see in Figure 1, the data presented is exactly what you would need to make informed business decisions.
![Fathom Dashboard](/assets/images/fathom_dashboard.png "current fathom dashboard")
<span class="figure">Figure 1 - Fathom Analytics dashboard (v2)</span>

The current data points are:

- number of current visitors
- current content w/ uniques
- site uniques
- site views
- average time on site
- bounce rate
- goal completions
- content w/ only views and uniques
- referrers w/ only views and uniques
- device types w/ uniques
- browsers w/ uniques
- country w/ uniques
- goals w/ conversion rate, completions, and designated value

### Summary
With Fathom Analytics, you no longer need to compromise. Privacy focused, the platform is fast, the data is easy to digest, and more importantly, free of Google's grip. You can now find out about your audience and make informed business decisions without feeling guilty. I can't wait for v3.  The giant doesn't stand a chance.

Thank you for reading.
