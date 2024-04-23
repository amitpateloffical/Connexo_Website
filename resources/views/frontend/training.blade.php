@extends('frontend.layout.layout')
@section('content')
<main class="main">
    <div class="site-breadcrumb" style="background: url(https://www.chemanager-online.com/sites/default/files/styles/gallery/public/2021-09/nichtverwenden_adobestock_236506650.jpg?h=3a42c0f3&itok=6DSk8raT)">
        <div class="container">
        <h2 class="breadcrumb-title">Training Service</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Training Service</li>
            </ul>
        </div>
    </div>
    <div class="service-area pos-rel bg de-padding">
        <div class="faq-shape">
            <img src="assets/img/gallery/gallery-bg.jpg" alt="thumb">
        </div>
        <div class="container">

            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="site-title text-center">
                        <h2>Training
                        </h2>
                        <p class="mb-0">
                            Good training is the only way to sustain compliance culture. Our experts deliver on-site knowledge sharing session on the following topics.
                        </p>
                    </div>
                </div>
            </div>
            <div class="service-wpr grid-3">
                <div class="service-box">
                    <div class="service-pic">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAABqlBMVEV9z9r///8ncpEBKmpnuMsel7JCqL77+fqB0dqLydiG3OQAJmgAImcdQ3chZYjD4Ohwvc9uusgXa4yRuMdyzNgAjqyw4ukxpLvd8PNsx9Xk6OyM093y9vbZ7vHO6/AvnrcAW4Gy2eAuWoRpuMxVrsOIqLnG1d0AWH/W4ec7fJhlk6m2ydOUzNeg2+Kpv8yRsMBTiKE5aI5jrsKk0t1bmrYAHWUAAFuixtM3epeBv8oACF13scdbv9IAE2CVr7djn7rY////3wBCdJQUN28AeJy2f5NatdR1m68ATHZipbm98fOu4OcqUnxVdJQaP3Qvg6eO6OxCk7EAhqfZ2+W3vNCtiZz0LEjnRFvwNE/MaH37GzzEcYX/DDJIkK/jT2TAd4uclaiZgpjGw8vSWW/qbHssscaTna/q1jk6nsPCxmKaiodFyNqTuY90uaX6egCVa4f0NAh5h5+66+Lak5+jzrTXy0H4AAD0ywCHwcH/6GTYKknjeCyqvHjo6pbaU2quyZLJ0HHqABvbyjTBx03cpzv5VgCpX3bIo6zqZ2xfrbCauYq5w26Yw6nc02TAgqtGAAAP90lEQVR4nO2dCWPaRhaAAQkhjgAiXDYC2UF2sQ024YjDtXaO4hi3ybpH4iRNmm3qhOwmu9u7u5tteuyVw/953+hCQhJIIBfXma8p4Fv6/N6bN6MBu2jMMC4MBoPBYDAYDAaDwWAwGAwGg8FgMBgMBoPBYDCYEwRNu/B+BhUBOrpbq+0yrsCsj+SkEKicrzfrQLNzbhdbAQLMmWaQIIigcNMhKthKoAxGgp0mcebMlU4HvDQvv+1SApeboOHM0l4P2Dt77gJB1N97u6UEVjpEsH62l5TobV4JEfVzb7MUutIkglf2kmreCxGd8lsshQ5BXU1q6Z0JEs1ZH9jsoMt14kJ1yElyr0OEzr+1gRIgiND7vWEnyZ36WxwoTIdoFnVKkskOUa/N+tiOGzpgAI1SJ3g94MqUhivK+6FTnzx05TzispYbgd+fD4WkBi2TKZX2EKVSKUPX6sSVU+7EVeuEdHRuXL8O/VlNNReOx+PigwpU2dPuZKtO6AjdIEJDThTASf20rxvUmhAYMO9F/8s0r54/f4Wolw3OnbYVJ/HMngpIwZIlMgpxJ0/VKjRTVqjJbO3TgUE90X4+tC3XLTtJu33uqfAlZ2FF9/Qg6bZsXEsD54KhyxZzJ876fL5idSSL8M+ISCSyiL7cl5tJqBjDNIkmY/D+JlHftfYd4hE4JTZFkZbhUynlccr7QRo5cWccPa2pCFwngvo5cGAFZoF2woRN8UW/VaIUJT+KUt6E4OQkBQq91SE6u8OnD92tYZkxIu4TnYxVAXkSUTuJIhQn6V/dSdyg6osHEbgSJDpzGik0DQN13fK3tuokm83mFCdRCXAyPxsnGam+zwuwLIveyIpHARWFqDOqoKBdoKmpix0z7DgR44T0eqMzdxJnJSe/E1heXhbe2hM+GKhdIIhmOSA9VZUO1OoQOTZWZG06iUZ5rZMZ5Y6bRckcySnAG1m3VNYEKfX6CuOCWSFTJjo2F6ntOBE8nAgntDtL8TxPoRsZKio7cQUqdejxQ51OKAj/E0SwWbMz1bHsBH4RpIETdkZO0qCD9DdUTviG4gQqyOULoaA8C7pwbs7WTGe8k2okUo2SuRPoJF8smjiBUHGVz3SanU6neWWFsTkfBiPsWCeLJBk5qU5IxUnFrWmT6ICLqVSgptieDbvdiYZ7RM8WJYvgJH9SnZDwD3REG40iN+RE+LyJvvuHH15tfejdbylohCBOqhOYWwhOGL8fOWkkJCfxqfkIcfWGMtveqrXUQk6uE14MEnACt+CE8QpO4sn01LCoDywg0IPlLaAhCSGruVyV/I044UUncbE3GI07Is3zqxHfonv8p7dACuggSeQERpz8CXYSHTjhJSdJ4SRYxxDOjr13rxaNVqvVWTmx9uIxm2d3W61dxQkvOZlDYZImU9PDJQS8VYgjN1SUaB4EzMZJPG19fW9TccJx0NEmJCdsipqalFcmUYXT29jYipIDJ2PrCUw8cg46ydpwsiU58XMMQnTirtpYIFPRbsMN8sEzJK/MGTivF+JkyMnYOImwvvT8bJzswjGi2seJv1LJSXQiJ+2Pby7JTgatMXxryAT7TiBa0zOKE/HA5TCfwkl76dadg4/bJMVTXo4f50TMnRG9fW6WTpjGol/wwQGKk7xtJ7eRkTaZpyDkOH5QV+BkR8SJ6RzwWONkeXVHxeraUO7A8JgupBsJL8UwJDmxk/bdO+8K5UQIOYpRIcSJUGOjUDfhlIUZcdSP4iSKrltEjZxk02yOPS4nayvSZa0VgXWtkxZyki2kNxMpaQ44yknUTEme/CTfzuehslJKzMmIcXLv3j4pzDUNbuGehK9TvpswFkMvPKNxp1WFefFmOpumuPFOSkneLEzevQtKhIwR4qQxCJOGWE+uXr3qTQwQH3vNcLw/seWkASeRKGazi160zmbupARR0tuLGrrKk+07QozITvRnCD3blmpmnE+g2U+RG/5EWdNsnQj5n0gXChwqBqZOots9cpuMJo2jpHX/00O5pgqpo27e5Ny5VxlAeYU7rRPOvxhZFD3N1on4a4lkC+a50/7hUXu7RPaiJN9rPdAbgfr6h0NK7YQqDvCLTpaWllSXhBsG0ZSPiFeLK4njcbIxnjXRifirShciXug8jXMnf+fOZz1eeE/m1s32sJIHd25Th9SQE0qusIzk5AbUk5FQyAf8B1IUJ1knnXgMiGnZkWosqnWRQnbTNE7a73669MmDNnpP++Hnd++2yZbKS759c/dQmyqCE3keqDi5cYMbLh8aisWqHw7FD2oSx+GELRhgnDvpwuZmDgZjr7mTg1ZmDaQgOwe9zM1W+9Yj5YPdx/0DjRIzJ7VaDTUew9sqBmFSLDZQgU1UFyPUcThZvvaOjmusgZOzrWw2C77SFRMncL90v92ba92BJvXRTai1S/cfHRy0hQ/lye6Toz8+PIQRJ2XRiSmVYlGcYeQXFyvHEifLBshrPBon+4topTAiR7U+TvLt2w/IHk+SNz/OowG3F7h760+3bkMqQclNPX367M9/cfW4VElccLEbJ2ihTvzJ/HE7KVxbMOOdmNZJAvoSr9I8aZ3k2wcodUrbfpRCt2624M6/nYxEW5884ovbrhR/1D/86xfJL0k+WeqVSslMapwTXpNnFKf8ZO64c8cwTmS0TgbRm/Dq5sVLdw8yn31VQlmC3kI3/Lb/6ySMNckk1+t+w1Gr35befPdlhkpBT2IhTopaouoaW2zAMRSPq8bO7yyNRFVjGyiVq6hfqOYiFX4QJ23g09a79x9WlMqCzHS/P3rcI9uf302l+L89Sx3+/R+Pn3P/LFmtJxVei9jCSUUWhh40FlPHMhYXPCtaLqqAYVkVJ3AEEd7bqHgbi95KZBAnrds/PLx90N6+/1DTkHRf/Nh9/nWyN/cT9ewx/cPuzrdfvuT6v3RlI8/GxYnRRcGiXFGKVbE9mXHuVPNcLpFgGglI50RRcdK6nWlsPPi4V2o90ih5/aZLUj//7eiXf/37Seo///3ft18FOCr1/KUgpE9Rr7kJxx0E06hWxQ73OHLHvMYuXJtXO9mKeBOL1Tz8ciBIGkUld8g26S/1ttGAo+5ov3+OIqLf7XOHP9SoO4e9Bzkk4+VzyB3u9ZP+E13uNGw4QZNAr9qJYztkUR87Yruu5kNnhd6+WEVzjEqDUdfY7e3tpJ9Xaolwlz/qK3Xj8NbDLyh+Gw01VP8X9P7n/OMXnOREGV9kJ0NrBWP4QHDidsiIGCfl1fEITnYPwQacIKg5hNtBjc37S6QcJN3v82It+UY9jn7x0yGV8gvFNfXiDZd6zg9qrH8wBZScfPTRmsH1sDRrcm1VUFJy2El5LKKThoaiEiePj7qDjLnURbc/v+qrnRxuDR73j572n/RVTlSImQBOBpdQlYjVXD/VhrMv7eCOeztrBWtnh98jOem+uvSjLKV79OJFnnz5mNIsi2jpv37yRj0WM7JQOXdo0y0IpufhmBGpj9VNd8qmTgpoe8hmQeuE7D699LorhclrmOlRj/vmRpCUVym1E2Wbj+TE5+AJTuaEXdOxbO4EFbXKvNYJTO/eXHohSOl+k6dePP2ZH6lkMAsUnQznjnPlclIntnJHXEmQnZTicm8PUt7khTDhqP6ll2OUKIhOpEXqKNP4TTrRkIzHlTkgpA/c9X+2asMwd5iJnAh1Rig1cUcKix0nutEOjmQwL+4e/djvH70aUVpNnfjlkWyi3IFT8LEZdHjxdDqTm/4pK8jJktCgoBFX7EV25G31KgyduFxx1byY+u7lN69G11YTJ40oI17Tm7CezLF77F7JF3exuZwDz1hBTlZjsVg4trS+vnFxAS2+rrhZzSXSHUHTCCd5CBSeSj27ZFeJybhjN3eS7JybdrnjrkwmmylNLUV04lnYEDuhtbDHA07chuuzpk6i4iUs7pm9xBnEicSkcQK1XowTVymXzk7d0IpOwkrbOB9GTljDRRQzJynN9V4BziJSHzvc29s7hVw67iqJzX0WlRRnnOyAkvmNjQLcraHcsVVPKuq5Kok2HJAM7zUnJV0blt8e9LGa3LG4t9boFQOmfKq34GRh3udbhlKysAHTCo+2nihl15oT6XxHOeF0TnijepLOWiF9+byecw448UB8xNCVroWCz72D4sTaWOyQE+PcGb+PVqiAZ0KhUDAo3ATRPfp3YW56J2U3qiPo6t+6z7cBTgqxixo8q8caJ/JOC7IxgZOg/iUDmg44WYGmR3Sy22js/+pxoozFFHNynCygS/mQPDEPDIgr4ES3lL8+xok8tibMnaSkEzdwYjgHtJw7QR1O5E4YUia3DwMOahKEnm14qXpUf4KckFLwD5xQQsvCDxZV5W1rBk6UjUqaGmuN8+f0vDeVErmP9UUYae1sxaN1InRs9p3oA2aEE2WDLHNyxuKYkDQC5RhyMr+k3X4yNndGOJGyihvhZLo5oONIvb0nVkPHtOuJib29bn14cifSA2pU7pw8J2XxernwD+FxF4aXqEf19tM7mXIO6DTIiWEjb30s3kxMHSfy/l8UJ5z7JDixirETn2/QllhyopvvqK9lJBLoxVB+fQ+akwIny/pFasNFayMnOTgDdtC1KTtErF/FS3AqJQwXQX3JbF/JBDlZMb9eLO/N8Zg4cWXQKVgPNUM0PRi6mfGruwj1xMLz9MycuEpGO9+mY9YveIOu7xjsK7hmtPHReAErTsuvB8YP1opcGYsMvoRSXlZs1q8BhOJkXV8/1o1++4ZOaNecRHxQRD5oz1nkg0FdiYvvsf5cdmvP7rQPipNwzHTPcFjtZDVmQLg8GMNZ3YOx6D9zJWz0YwzxVI5FC7o4srFuyobWid5deMOdjTgJ694IG23sNiQW2z2Gv7sg5M5INtgRTmLLbkeNAGn3soF7cyv7c04HC8qdd8LmQLk1dxJbYVmnlaCXJGLLNqx4wmW7r7cy3om+t1fn+4jcCS85nDcyPjv5g343FxknQwXVE83+k6Exec3cSXjN8byRYW3lD7LiZLlFcWL0vAwZ0ziJXZx3zw8ves3r3qP+oMWVMyDL2swfR8utnTmg2olwmcwChqds6Utt5o9UbmfoJLxuTYlxvclZ+lq7+YO02H55Kz0BF2f47CVjduRjjMXmrSnJmVZRS1Ls5g86tIuVaWKFdlVWYrZ/KPq5q25rSnzilNnq5xp89Yb944t5dicstzRN7k8kBCiPuJSbmxDlZRO18ZReneD4Jiq3NM1MLARYNU0Jx8ntTHSEsfD+nJ3CMqUQoHz216M86UFCubWYQnRgTrheMR2WJ67TM81RXrTyV8UCLgeE/IaAwjImVuhdzzsLI6Z7p5GFhfLoKLlQ1//Fi1PP6D0GAYM/eHH6Gb0XBTvBTkTGOdHv6Dn9jK4n9PUzbyFXRu/jMtzSc+oZqQSDwWAwGAwGg8FgMBgMBoPBYDAYDAaDwWAwGAwGg8FgMBgMBvPb4f8MCLrdIgEXVQAAAABJRU5ErkJggg==" class="service-1" alt="thumb">
                    </div>
                    <div class="service-icon">
                        <i class="icofont-architecture"></i>
                    </div>
                    <div class="service-desc">
                        <a href="service-single.html" target="_blank">
                            <h4>Data integrity</h4>
                        </a>
                        <p class="text-lowercase">
                            Understanding of Data Integrity Fundamentals.
                            Data Integrity Guidance from USFDA/MHRA/EMA/WHO/PCS: What are the similarities and differences between the guidance?
                            Understand with examples difference between improper practice and data integrity.

                        </p>
                    </div>
                </div>
                <div class="service-box">
                    <div class="service-pic">
                        <img src="https://res.cloudinary.com/rootworks/image/upload/f_auto,q_100/c_fill,w_768/v1/web_assets/audit-vector-3_o4hle0" class="service-1" alt="thumb">
                    </div>
                    <div class="service-icon">
                        <i class="icofont-barricade"></i>
                    </div>
                    <div class="service-desc">
                        <a href="service-single.html" target="_blank"><h4>Fundamental of Computerized System Validation</h4></a>
                        <p>
                            What is computerized system and it history.
                            Key factors that influence the degree of FDA oversight for CSV programs.
                            Introduction of GAMP5 guideline and Risk based approach for Life cycle phase of computerized system.



                        </p>
                    </div>
                </div>
                <div class="service-box">
                    <div class="service-pic">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTipt5chC6HTgcy098ngCROWQQmI1ZOW_Cj4-jR7Anh7G_q44hwUgNksdfc_BGLAayF-GA&usqp=CAU" class="service-1" alt="thumb">
                    </div>
                    <div class="service-icon">
                        <i class="icofont-industries-3"></i>
                    </div>
                    <div class="service-desc">
                        <a href="service-single.html" target="_blank"><h4>SOPs and Validation Deliverables
                        </h4></a>
                        <p>
                            Validation Master Plan.


CSV SOPs.


How to write appropriate specification (URS), Risk Assessment and other GAMP Methodology validation deliverables.
Vendor Assessment.


Data backup and restoration Verification


                        </p>
                    </div>
                </div>
                <div class="service-box">
                    <div class="service-pic">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcksaZUg5CZCG0e8y3z4HlK0Ts6Y97nIFnjYb-pck4EGENzUTsCFPs-3yNjfOPpvJOGG4&usqp=CAU" class="service-1" alt="thumb">
                    </div>
                    <div class="service-icon">
                        <i class="icofont-industries-3"></i>
                    </div>
                    <div class="service-desc">
                        <a href="service-single.html" target="_blank"><h4>21 CFR Part 11 and Annex 11 – 1)

                        </h4></a>
                        <p>
                            Evaluation and Key requirements of 21 CFR part 11.
                            Evaluation and Key requirements of Annex 11.
                            Relationship between Part 11 and Annex 11.



                        </p>
                    </div>
                </div>
                <div class="service-box">
                    <div class="service-pic">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCrQ_BbHfs9SQ7CbL-j-1OM4zziJ4MmPtvRRSWjQOw-6ywDndOogEXl0EmxJxwSzTCsDQ&usqp=CAU" class="service-1" alt="thumb">
                    </div>
                    <div class="service-icon">
                        <i class="icofont-industries-3"></i>
                    </div>
                    <div class="service-desc">
                        <a href="service-single.html" target="_blank"><h4>21 CFR Part 11 and Annex 11 – 2)

                        </h4></a>
                        <p>
                            Learning form 483: Warning letter are key wealth destroyer for pharma company market capital and reputation.
                            Inspection Readiness.




                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
