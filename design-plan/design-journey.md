# Project 2: Design Journey

**For each milestone, complete only the sections that are labeled with that milestone.** Refine all sections before the final submission.

You are graded on your design process. If you later need to update your plan, **do not delete the original plan, rather leave it in place and append your new plan _below_ the original.** Then explain why you are changing your plan. Any time you update your plan, you're documenting your design process!

**Replace ALL _TODOs_ with your work.** (There should be no TODOs in the final submission.)

Be clear and concise in your writing. Bullets points are encouraged.

**Everything, including images, must be visible in _Markdown: Open Preview_.** If it's not visible in the Markdown preview, then we can't grade it. We also can't give you partial credit either. **Please make sure your design journey should is easy to read for the grader;** in Markdown preview the question _and_ answer should have a blank line between them.


## Design Plan (Milestone 1)

**Make the case for your decisions using concepts from class, as well as other design principles, theories, examples, and cases from outside of class (includes the design prerequisite for this course).**

You can use bullet points and lists, or full paragraphs, or a combo, whichever is appropriate. The writing should be solid draft quality.


### Catalog (Milestone 1)
> What will your catalog website be about? (1 sentence)

My catalog website would be about music with beautiful performance


### Audience (Milestone 1)
> Briefly explain your site's audience. Your audience should be specific, but not arbitrarily specific. (1 sentence)
> Justify why this audience is a **cohesive** group. (1-2 sentences)

My audience would be dancers who are looking for more potential songs to dance to.

This is a cohesive group because many dancers, including myself, often find themselves in need of music recommendations to dance to or choreograph to. I would be offering a list of my personal favorites in different genres of music and they can add songs to the catalog as well.

### Audience Goals (Milestone 1)
> Document your audience's goals for using this catalog website.
> List each goal below. There is no specific number of goals required for this, but you need enough to do the job (Hint: It's more than 1. But probably not more than 3.)
> **Hint:** Users will be able to view all entries in the catalog and insert new entries into the catalog. The audience's goals should probably relate to these activities.

Goal 1: The user will be able to view all the songs that people recommend for dance as well as being able to see what genre the song is in and what type of style of dances the song could be choreographed to.

- **Design Ideas and Choices** _How will you meet those goals in your design?_
  - I will meet this goal by creating a column for each song reccomendation and columns for the name of the artist as well as introducing the genre of the music and what types of dance styles could be used to choreograph.
- **Rationale & Additional Notes** _Justify your decisions; additional notes._
  - By having columns that are specific to each category, the user can clearly see which the details that are unique to each song.

Goal 2: The user will be able to add songs they want to recommend for dancing.

- **Design Ideas and Choices** _How will you meet those goals in your design?_
  - I will implement a form which adds to the database what song recommendations users have if they decide to leave a recommendation for other users to see.

Goal 3: The user would be able to see choreography inspiration for each song provided.
_
  - I will have a column designed to reccomend already existing choreographies for each song that is optional but can be filled to give other users inspiration in choreographing for a certain song.



### Audience Device (Milestone 1)
> How will your audience access this website? From a narrow (phone) or wide (laptop) device?
> Justify your decision. (1 sentence)

Desktop Website

I think that a desktop view would make more sense since it would give a more full view of the table that I intend to create.


### Persona (Milestone 1)
> Use the goals you identified above to develop a persona of your site's audience.
> Your persona must have a name and a face. The face can be a photo of a face or a drawing, etc.

![persona](/design-plan/persona.jpg)

Julia

**Factors that Influence Behavior:**

- Knowledge of songs Julia listens to on a regular basis
- Type of music genre Julia usually listens to
- Type of dance styles Julia usually likes to dance to
- Willingness to share song recommendation

**Goals:**

- Find new music to choreograph to
- Give recommendations and share songs to others


**Obstacles:**

- It is hard to find songs to choreograph to sometimes since she might be stuck in her own playlists
- It is hard to decide whwat type of style to dance to and often lack inspiration to choreograph

**Desires:**

-Learn more about new music to choreograph to
-Find inspiration in other dance choreographies and styles


### Catalog Data (Milestone 1)
> Using your persona, identify the data you need to include in the catalog for your site's audience.
> Justify why this data aligns with your persona's goals. (1 sentence)

Data:
    -Song Name
    -Artist
    -Music Genre
    -Potential Dance Style
    -Choreography Inspiration

These data help Julia with new song recommendations as well as the artist's name. Julia will know the music genre without needing to actually listen to the music yet. There is also suggested potential dance styles which the song could be suitable for. There is also examples of choreography for each song that could give some inspiration to her.


### Site Design (Milestone 1)
> Design your catalog website to address the goals of your persona.
> Sketch your site's design:
>
> - These are **design** sketches, not _planning_ sketches.
> - Use text in the sketches to help us understand your design.
> - Where the content of the text is unimportant, you may use squiggly lines for text.
> - **Do not label HTML elements or annotate CSS classes.** This is not a planning sketch.
>
> Provide a brief explanation _underneath_ each sketch. (1 sentence)
> **Refer to your persona by name in each explanation.**

![sketch](/design-plan/sketch.jpg)
I want my website to be pretty clean and chic. The table will be aligned to the right with the form and text on the left.

![sketch](/design-plan/updated.jpg)
This is an updated sketch of the website. I decided to go for a darker theme. It has a more cohesive theme and more visual impact to go with the dance chic theme.

### Catalog Design Patterns (Milestone 1)
> Explain how you used design patterns for online catalogs in your site's design. (1-2 sentences)

I used design patterns of shaded rows for every even row to help visibility and accesibility.


## Implementation Plan (Milestone 1, Milestone 2)

**Provide enough detail in your plan that another 2300 student could implement your plan.**

### Database Schema (Milestone 1)
> Plan the structure of your database. You may use words or a picture.
> A bulleted list is probably the simplest way to do this.
> Make sure you include constraints for each field.

Table: music

- "name": TEXT {NOT NULL UNIQUE}
- "artist": TEXT {NOT NULL}
- "genre": TEXT {NOT NULL}
- "style": TEXT {}
- "inspiration": TEXT {}


### Database Query Plan (Milestone 1, Final Submission)
> Plan your database queries.
> You may use natural language, pseudocode, or SQL.

1. All Records (Milestone 1)

    ```
    $db = open_sqlite_db('secure/site.sqlite');
    $result = exec_sql_query($db, 'SELECT * FROM music;');
    $records = $result->fetchAll();
    ```

1. Insert Record (Final Submission)

    ```
     foreach ($records as $record) { ?>
        <tr>
          <td><?php echo htmlspecialchars( $record['name'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['artist'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['genre' ] ); ?></td>
          <td><?php echo htmlspecialchars( $record['style'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['inspiration'] ); ?></td>
        </tr>
    ```


### From Validation (Milestone 2)
> Plan the validation criteria for each piece of form data.

- Song name
  - Text
- Artist name
  - Text
- Genre
  - Text
- Style
  - Text
- Inspiration
  - Text


### Form Planning (Milestone 2)
> Plan your form validation using **pseudocode**.

```
If form was submitted:
   Store form data as variables.
   Assume form is valid.
   Validate each piece of required data:

  Song name is required.
  If $data is empty ($data == ''):
    Mark form as invalid.
    Show corrective feedback for $data.

  Artist name is required.
  If $data is empty ($data == ''):
    Mark form as invalid.
    Show corrective feedback for $data.

  Genre is required.
  If $data is empty ($data == ''):
    Mark form as invalid.
    Show corrective feedback for $data.

  Style is not required.
  If $data is empty ($data == ''):

  Inspiration is not required.
  If $data is empty ($data == ''):

  If form data is valid:
    Show confirmation.
  } else {
    Set sticky values and echo them.
  }
}
```


### Form Test Data (Milestone 2)
> For each piece of form data, provide samples of valid and invalid data for testing.

**Valid Test Data:**

- Name: "Ash"
- Artist: "Seventeen"
- Genre: "Pop"
- Style: "Hip Hop"
- inspiration: "HOSHI"

**Invalid Test Data:**

- Name: ""
- Artist: ""
- Genre: ""
- Style: "" (no invalid)
- inspiration: "" (no invalid)


## Complete & Polished Website (Final Submission)

### Accessibility Audit (Final Submission)
> Tell us what issues you discovered during your accessibility audit.
> What do you do to improve the accessibility of your site?

I didn't have any accessibility audits. The only alert was a missing H1 header which I changed the H2 in the header into H1.

### Self-Reflection (Final Submission)
> Reflect on what you learned during this assignment. How have you improved from Project 1? What would you do differently next time? (2-3 sentences)

I think I was more careful with accessibility audits since that was what I was I got points off for in my project 1. I would perhaps try out more different styles or variations of design next time.


> Take some time here to reflect on how much you've learned since you started this class. It's often easy to ignore our own progress. Take a moment and think about your accomplishments in this class. Hopefully you'll recognize that you've accomplished a lot and that you should be very proud of those accomplishments! (1-3 sentences)

I think this project has been very different from the previous in terms of implementing more interactive desing with the client. I think this is very different from the dynamic side of web programming. I am proud to be able to accomplish the website and for it look pretty aesthetic.


### Collaborators (Final Submission)
> List any persons you collaborated with on this project.

n/a


### Reference Resources (Final Submission)
> Please cite any external resources you referenced in the creation of your project.
> (i.e. W3Schools, StackOverflow, Mozilla, etc.)
Canvas materials
