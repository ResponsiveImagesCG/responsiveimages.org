(function( ){
		var siblings = function( t ) {
				var sibs = [],
					el = t.parentNode.firstChild;

				while( el ) {
					if( el.nodeType === 1 && el !== t ) {
						sibs.push( el );
					}
					el = el.nextSibling;
				}
				return sibs;
			},
			addClass = function( el, cl ) {
				el.className += ( el.className ? ' ' : '' ) + cl;
			},
			removeClass = function( el, cla ) {
				if( el.className !== undefined ){
					el.className = el.className.replace( new RegExp( "(^|\\s)" + cla + "($|\\s)", "gmi" ), " " );
				}
			},
			toggle = function( e ) {
				var t = this.getAttribute( "href" ),
					target = document.getElementById( t.slice(1) ),
					panelsibs = siblings( target ),
					tabsibs = siblings( this );

				if( this.getAttribute( "class" ) && this.getAttribute( "class" ).indexOf( "active" ) > -1 ) {
					return;
				}
				addClass( this, "active" );
				this.setAttribute( "aria-selected", "true" );

				for( var i = 0, sl = tabsibs.length; i < sl; i++ ) {
					var sib = tabsibs[ i ];

					removeClass( sib, "active" );
					sib.setAttribute( "aria-selected", "false" );
				}

				addClass( target, "current" );
				target.setAttribute( "aria-hidden", "false" );

				for( var j = 0, pl = panelsibs.length; j < pl; j++ ) {
					var sibp = panelsibs[ j ];

					removeClass( sibp, "current" );
					sibp.setAttribute( "aria-hidden", "true" );
				}
				e.preventDefault();
			};

			var tracker = document.getElementById( "issue-tracker" ),
				panels = tracker.getElementsByTagName( "div" ),
				hed = tracker.getElementsByTagName( "h2" ),
				nav = document.createElement( "nav" );

			if( !hed.length ) {
				return;
			}

			addClass( nav, "tablist" );
			nav.setAttribute( "role", "tablist" );

			for( var k = 0, hl = hed.length; k < hl; k++ ) {
				var txt = hed[ k ].innerHTML,
					link = document.createElement( "a" ),
					issuetype = txt.indexOf( "open" ) > -1 ? "open" : "closed";

				link.setAttribute( "role", "tab" );
				link.setAttribute( "id", "issues-" + issuetype + "-tab" );
				link.setAttribute( "href", "#issues-" + issuetype  );

				link.innerHTML = txt;
				link.addEventListener( "click", toggle );

				if( k === 0 ) {
					addClass( link, "active" );
				}
				nav.appendChild( link );
			}

			for( var l = 0, pl = panels.length; l < pl; l++ ) {
				var panel = panels[ l ],
					type = panel.getAttribute( "id" ).indexOf( "open" ) > -1 ? "open" : "closed";

				addClass( panel, "tabpanel" );

				panel.setAttribute( "role", "tabpanel" );
				panel.setAttribute( "aria-labelledby", "issues-" + type + "-tab" );
				panel.removeChild( panel.getElementsByTagName( "h2" )[ 0 ] );

				if( l === 0 ) {
					addClass( panel, "current" );
				}
			}

			tracker.insertBefore( nav, panels[ 0 ] );
		}());